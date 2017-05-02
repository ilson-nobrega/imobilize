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

        $query = "SELECT usuario, senha 
                  FROM corretor 
                  WHERE usuario = '" . $data['usuario'] . "'";

        $dbFactory = $this->dbFactory;
        $stmt = $dbFactory::prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();

        if($result){
            return Validator::verifyEncryptedFieldValue($result->senha, $data['senha']);
        }else{
            return false;
        }
    }
}