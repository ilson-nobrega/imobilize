<?php
// DIC configuration

$container = $app->getContainer();

// -----------------------------------------------------------------------------
// View Renderer
// -----------------------------------------------------------------------------
//$container['renderer'] = function ($c) {
//    $settings = $c->get('settings')['renderer'];
//    return new Slim\Views\PhpRenderer($settings['template_path']);
//};

$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

// -----------------------------------------------------------------------------
// Logger
// -----------------------------------------------------------------------------
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// -----------------------------------------------------------------------------
// Action factories
// -----------------------------------------------------------------------------
$container['HomeAction'] = function ($c) {
    $resource = new Imobilize\Src\Resource\HomeResource($c->get('dbFactory'));
    return new \Imobilize\Src\Controller\HomeAction($c->get('logger'), $c->get('view'), $resource);
};
$container['AdminAction'] = function ($c) {
    $resource = new Imobilize\Src\Resource\AdminResource($c->get('dbFactory'));
    return new \Imobilize\Src\Controller\AdminAction($c->get('logger'), $c->get('view'), $resource);
};
$container['ProprietarioAction'] = function ($c) {
    $resource = new Imobilize\Src\Resource\ProprietarioResource($c->get('dbFactory'));
    return new \Imobilize\Src\Controller\ProprietarioAction($c->get('logger'), $c->get('view'), $resource);
};

// -----------------------------------------------------------------------------
// Database Factory
// -----------------------------------------------------------------------------
$container['dbFactory'] = function ($c) {
    return Imobilize\Src\Helper\DB::class;
};