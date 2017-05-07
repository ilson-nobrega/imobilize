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

        $query = "SELECT senha, creci, nome, codigo
                  FROM corretor 
                  WHERE creci = '" . $data['creci'] . "'";

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

        if($this->checkExistingRegister($data)){
            $query = "INSERT INTO corretor (creci, nome , senha) VALUES (?,?,?)";
            $dbFactory = $this->dbFactory;
            $stmt = $dbFactory::prepare($query);
            $result = $stmt->execute(array(
                $data['creci'],
                $data['nome'],
                Validator::encryptField($data['senha'])
            ));
            if($result){
                $obj = new \stdClass();
                $obj->creci = $data['creci'];
                $obj->nome = $data['nome'];
                $obj->codigo = $data['nome'];
                return $obj;
            }else{
                return false;
            }
        } else {
            return false;
        }

    }

    public function checkExistingRegister($data){
        $query = "SELECT nome
                  FROM corretor 
                  WHERE creci = '" . $data['creci'] . "'";

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return false;
        }else{
            return true;
        }
    }
}