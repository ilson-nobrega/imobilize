<?php
/**
 * Created by PhpStorm.
 * User: ilson.nobrega
 * Date: 04/05/17
 * Time: 00:21
 */

namespace Imobilize\Src\Controller;


use Imobilize\Src\Helper\CheckLogin;
use Imobilize\Src\Resource\ProprietarioResource;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

class ProprietarioAction
{
    private $logger;
    private $view;
    private $resource;

    public function __construct(LoggerInterface $logger, Twig $view, ProprietarioResource $resource)
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
            if($resource = $this->resource->findAllProprietarios($_SESSION['user'])){
                return $this->view->render($response, '/pages/proprietario/home.twig',
                    ['data' => $resource]);
            }else{
                return $this->view->render($response, '/pages/proprietario/home.twig',
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