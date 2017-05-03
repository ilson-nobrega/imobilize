<?php

namespace Imobilize\Src\Controller;


use Imobilize\Src\Helper\CheckLogin;
use Imobilize\Src\Resource\AdminResource;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

class AdminAction
{
    private $logger;
    private $view;
    private $resource;

    public function __construct(LoggerInterface $logger, Twig $view, AdminResource $homeResource)
    {
        $this->logger = $logger;
        $this->view = $view;
        $this->resource = $homeResource;
    }

    public function indexAction($request, $response, $args)
    {
        if (!CheckLogin::checkLogin()) {
            return $response->withRedirect('/login');
        } else {
            return $this->view->render($response, '/pages/home.twig', $_SESSION['user']);
        }
    }
}