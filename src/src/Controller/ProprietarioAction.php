<?php
/**
 * Created by PhpStorm.
 * User: ilson.nobrega
 * Date: 04/05/17
 * Time: 00:21
 */

namespace Imobilize\Src\Controller;


use Imobilize\Src\Helper\CheckLogin;
use Imobilize\Src\Helper\Messages;
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
            if ($resource = $this->resource->findAllProprietarios($_SESSION['user'])) {
                return $this->view->render($response, '/pages/proprietario/home.twig',
                    ['data' => $resource]);
            } else {
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

    public function getByIdAction($request, $response, $args){
        if (!CheckLogin::checkLogin()) {
            return $response->withRedirect('/login');
        } else {
            if ($resource = $this->resource->findOneBy($args['id'])) {
                return $this->view->render($response, '/pages/proprietario/details.twig',
                    ['data' => $resource]);
            } else {
                return $this->view->render($response, '/pages/proprietario/details.twig',
                    [
                        'error' => [
                            'code' => 404,
                            'message' => Messages::ERR_004
                        ]
                    ]
                );
            }
        }
    }
    public function deleteAction($request, $response, $args){
        if (!CheckLogin::checkLogin()) {
            echo json_encode([
                'error' => [
                    'code' => 404,
                    'message' => Messages::ERR_005
                ]
            ]);
        } else {
            if ($resource = $this->resource->delete($args['id'])) {
                echo json_encode([
                    'data' => [
                        'error' => [],
                        'success' => [
                            'code' => 1,
                            'message' => Messages::SCS_001
                        ]
                    ]
                ]);
            } else {

            }
        }
    }
}