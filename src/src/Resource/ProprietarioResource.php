<?php
/**
 * Created by PhpStorm.
 * User: ilson.nobrega
 * Date: 04/05/17
 * Time: 00:21
 */

namespace Imobilize\Src\Resource;


class ProprietarioResource extends AbstractResource
{
    public function findAllProprietarios($user)
    {
        $query = "SELECT pf.nome,pf.cpf,pf.rg,pf.telefone,pf.email
                FROM pessoa_fisica pf
                JOIN proprietario pr
                ON pf.codigo = pr.pessoa_fisica_codigo
                JOIN contrato_corretagem cc
                ON cc.proprietario_codigo = pr.codigo
                WHERE cc.corretor_codigo = " . $user['data']->codigo;

        print_r($user);exit;
        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        print_r($result);exit;
        if($result){
            return $result;
        }else{
            return false;
        }
    }

}