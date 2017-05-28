<?php
/**
 * Created by PhpStorm.
 * User: ilson.nobrega
 * Date: 04/05/17
 * Time: 00:21
 */

namespace Imobilize\Src\Resource;


use Imobilize\Src\Helper\Constantes;

class ProprietarioResource extends AbstractResource
{
    public function findAllProprietarios($user)
    {
        $query = "SELECT pf.nome,pf.cpf,pf.rg,pf.telefone,pf.email, cc.proprietario_codigo
                FROM pessoa_fisica pf
                JOIN proprietario pr
                ON pf.codigo = pr.pessoa_fisica_codigo
                JOIN contrato_corretagem cc
                ON cc.proprietario_codigo = pr.codigo
                WHERE cc.corretor_codigo = " . $user['data']->codigo .
                " AND pr.status = 1";


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
    public function findOneBy($id) {
        $query = "SELECT pr.codigo, pf.cpf, pf.rg, pf.sexo, pf.email, pf.data_nascimento, pf.nome, pf.telefone,
                    en.logradouro, en.numero, en.bairro, en.cep, uf.sigla as uf_sigla, uf.nome as uf_nome, ci.nome as cidade_nome
                    FROM proprietario pr
                    JOIN pessoa_fisica pf
                    ON pf.codigo = pr.pessoa_fisica_codigo
                    JOIN endereco en
                    ON en.codigo = pf.endereco_codigo
                    JOIN uf
                    ON uf.codigo = en.uf
                    JOIN cidade ci
                    ON ci.codigo = en.cidade
                    WHERE pr.codigo = " . $id;

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            $result->sexo = constant(Constantes::class."::SEXO_00$result->sexo");
            return $result;
        }else{
            return false;
        }
    }

    public function delete($id) {
        $query = "UPDATE proprietario SET status = 0 WHERE codigo = " . $id;

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $result = $stmt->execute();

        if($result){
            return true;
        }else{
            return false;
        }
    }

}