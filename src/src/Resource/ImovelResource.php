<?php
/**
 * Created by PhpStorm.
 * User: Ilson Nóbrega
 * Date: 13/05/2017
 * Time: 11:52
 */

namespace Imobilize\Src\Resource;


class ImovelResource extends AbstractResource
{
    public function findAll($user)
    {
        print_r($user);exit;
        $query = "SELECT im.codigo, im.status, im.tipo_imovel, im.numero_quartos, en.bairro, ci.nome as cidade, uf.sigla
                    FROM imovel im
                    JOIN endereco en
                    ON im.endereco_codigo = en.codigo
                    JOIN cidade ci
                    ON en.cidade = ci.codigo
                    JOIN uf
                    ON uf.codigo = en.uf
                    JOIN contrato_corretagem cc
                    ON im.codigo = cc.imovel_codigo
                    WHERE cc.corretor_codigo = " . $user['data']->codigo;

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}