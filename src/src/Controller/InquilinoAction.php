<?php
namespace Imobilize\Src\Controller;

use Imobilize\Src\Helper\CheckLogin;
use Imobilize\Src\Helper\Messages;
use Imobilize\Src\Resource\InquilinoResource;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

class InquilinoAction
{
    private $logger;
    private $view;
    private $resource;

    public function __construct(LoggerInterface $logger, Twig $view, InquilinoResource $resource)
    {
        $this->logger = $logger;
        $this->view = $view;
        $this->resource = $resource;
    }

    public function indexAction($request, $response, $args)
    {
        if (!CheckLogin::checkLogin()) {
            return $response->withRedirect('/login');
        } else {
            if($resource = $this->resource->findAll($_SESSION['user'])){
                return $this->view->render($response, '/pages/inquilino/home.twig',
                    ['data' => $resource]);
            }else{
                return $this->view->render($response, '/pages/inquilino/home.twig',
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
}