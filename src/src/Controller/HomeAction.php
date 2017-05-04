<?php

namespace Imobilize\Src\Controller;

use Imobilize\Src\Helper\CheckLogin;
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
        if (!CheckLogin::checkLogin()) {
            return $response->withRedirect('/login');
        } else {
            return $response->withRedirect('/admin/dashboard');
        }
    }

    public function loginAction($request, $response, $args)
    {
        if (!CheckLogin::checkLogin()) {
            return $this->view->render($response, 'login.twig');
        } else {
            return $response->withRedirect('/admin/dashboard');
        }
    }

    public function doLoginAction($request, $response, $args)
    {
        if ($data = $this->resource->doLogin($request->getParsedBody())) {
            CheckLogin::setLogin($data);
            return $response->withRedirect('/admin/dashboard');
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

    public function logoutAction($request, $response, $args)
    {
        if (CheckLogin::endLogin()) {
            return $response->withRedirect('/login');
        }
    }

    public function registerAction($request, $response, $args)
    {
        $this->logger->info("Imobilize '/register' route");
        return $this->view->render($response, 'register.twig');
    }

    public function doRegisterAction($request, $response, $args)
    {
        $data = $request->getParsedBody();

        if (!isset($data['senha']) || !isset($data['creci']) || !isset($data['nome'])) {
            return $this->view->render($response, 'register.twig',
                [
                    'error' => [
                        'code' => 400,
                        'message' => Messages::ERR_002
                    ]
                ]
            );
        } else {
            if ($data = $this->resource->doRegister($request->getParsedBody())) {
                CheckLogin::setLogin($data);
                return $response->withRedirect('/admin/dashboard');
            } else {
                return $this->view->render($response, 'register.twig',
                    [
                        'error' => [
                            'code' => 403,
                            'message' => Messages::ERR_003
                        ]
                    ]
                );
            }
        }
    }
}