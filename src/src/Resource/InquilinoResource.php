<?php
/**
 * Created by PhpStorm.
 * User: Ilson Nóbrega
 * Date: 13/05/2017
 * Time: 11:11
 */

namespace Imobilize\Src\Resource;


class InquilinoResource extends AbstractResource
{
    public function findAll($user)
    {
        $query = "SELECT pf.nome,pf.cpf,pf.rg,pf.telefone,pf.email
                FROM pessoa_fisica pf
                JOIN inquilino iq
                ON pf.codigo = iq.pessoa_fisica_codigo
                JOIN contrato_aluguel ca
                ON ca.inquilino_codigo = iq.codigo
                WHERE ca.corretor_codigo = " . $user['data']->codigo;

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if($result){
            return $result;
        }else{
            return false;
        }
    }
}