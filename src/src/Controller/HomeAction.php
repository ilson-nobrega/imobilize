<?php

namespace Imobilize\Src\Controller;

use Imobilize\Src\Resource\HomeResource;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;
use Imobilize\Src\Helper\Messages;

class HomeAction
{

    private $logger;
    private $view;
    private $resource;

    public function __construct(LoggerInterface $logger, Twig $view, HomeResource $homeResource)
    {
        $this->logger = $logger;
        $this->view = $view;
        $this->resource = $homeResource;
    }

    public function indexAction($request, $response, $args)
    {
        if (!isset($_SESSION['usuario'])) {
            return $response->withRedirect('/login');
        } else {
            return $response->withRedirect('/admin/home');
        }
    }

    public function loginAction($request, $response, $args)
    {
        $this->logger->info("Imobilize '/' route");
        return $this->view->render($response, 'login.twig');
    }

    public function doLoginAction($request, $response, $args)
    {
        if ($this->resource->doLogin($request->getParsedBody())) {
            return $response->withRedirect('/admin/home');
        } else {
            return $this->view->render($response, 'login.twig',
                [
                    'error' => [
                        'code' => 404,
                        'message' => Messages::ERR_001
                    ]
                ]
            );
        }
    }
}