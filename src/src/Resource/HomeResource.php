<?php
/**
 * Created by PhpStorm.
 * User: ilson.nobrega
 * Date: 02/05/17
 * Time: 17:47
 */

namespace Imobilize\Src\Resource;

use Imobilize\Src\Helper\Library as Validator;


class HomeResource extends AbstractResource
{
    public function doLogin($data){

        $query = "SELECT usuario, senha, creci, nome
                  FROM corretor 
                  WHERE usuario = '" . $data['usuario'] . "'";

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result && Validator::verifyEncryptedFieldValue($result->senha, $data['senha'])){
            unset($result->senha);
            return $result;
        }else{
            return false;
        }
    }

    public function doRegister($data){

        $query = "INSERT INTO corretor (creci, nome ,usuario, senha) VALUES (?,?,?,?)";

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $result = $stmt->execute(array(
            $data['creci'],
            $data['nome'],
            $data['usuario'],
            Validator::encryptField($data['senha'])
        ));

        if($result){
            return true;
        }else{
            return false;
        }
    }
}