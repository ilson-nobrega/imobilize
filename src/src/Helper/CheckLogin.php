<?php
/**
 * Created by PhpStorm.
 * User: ilson.nobrega
 * Date: 02/05/17
 * Time: 20:51
 */

namespace Imobilize\Src\Helper;


class CheckLogin
{
    public static function checkLogin()
    {
        session_start();
        if (isset($_SESSION['usuario'])) {
            if (strtotime($_SESSION['usuario']) < strtotime(date("d-m-Y H:i:s"))) {
                return false;
            } else {
                return true;
            }
        }else{
            return false;
        }
    }

    public static function setLogin()
    {
        session_start();
        $_SESSION['usuario'] = date("d-m-Y H:i:s", strtotime('+2 hours'));
    }
}