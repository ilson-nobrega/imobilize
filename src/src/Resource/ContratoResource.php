<?php
/**
 * Created by PhpStorm.
 * User: Ilson Nóbrega
 * Date: 13/05/2017
 * Time: 16:42
 */

namespace Imobilize\Src\Resource;


use Imobilize\Src\Helper\Constantes;

class ContratoResource extends AbstractResource
{
    public function findAll($user)
    {
        $query = "SELECT ca.numero, ca.imovel_codigo, ca.inquilino_codigo, ca.proprietario_codigo, ca.corretor_codigo,
                ca.valor as valor_iptu, ca.data_inicio as data_inicio_contrato, ca.data_termino as data_termino_contrato, 
                im.tipo_imovel, im.numero_quartos, im.valor_iptu, im.status as status_imovel, im.matricula_escritura, 
                im.livro_escritura, im.folha_escritura, im.data_escritura, en.logradouro, en.numero, en.bairro, en.cep, 
                uf.sigla as sigla_estado, uf.nome as nome_estado, ci.nome as nome_cidade, ufe.sigla as sigla_estado_escritura, 
                ufe.nome as nome_estado_escritura, pf.nome as nome_proprietario, pf.cpf as cpf_proprietario, 
                pfiq.nome as nome_inquilino, pfiq.cpf as cpf_inquilino
                FROM contrato_aluguel ca
                JOIN imovel im
                ON im.codigo = ca.imovel_codigo
                JOIN endereco en
                ON en.codigo = im.endereco_codigo
                JOIN uf
                ON en.uf = uf.codigo
                JOIN cidade ci
                ON ci.codigo = en.cidade
                JOIN uf as ufe
                ON ufe.codigo = im.uf_escritura
                JOIN proprietario pr
                ON pr.codigo = ca.proprietario_codigo
                JOIN pessoa_fisica pf
                ON pf.codigo = pr.pessoa_fisica_codigo
                JOIN inquilino iq
                ON ca.inquilino_codigo = iq.codigo
                JOIN pessoa_fisica pfiq
                ON pfiq.codigo = iq.pessoa_fisica_codigo
                WHERE ca.corretor_codigo = " . $user['data']->codigo;

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $data){
            $data->status_imovel = constant(Constantes::class."::STATUS_IMOVEL_$data->status_imovel");
            $data->tipo_imovel = constant(Constantes::class."::TIPO_IMOVEL_$data->tipo_imovel");
        }

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}