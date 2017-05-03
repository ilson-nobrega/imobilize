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
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION['user'])) {
            if (strtotime($_SESSION['user']['time']) < strtotime(date("d-m-Y H:i:s"))) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    public static function setLogin($data)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user']['time'] = date("d-m-Y H:i:s", strtotime('+2 hours'));
        $_SESSION['user']['data'] = $data;
    }

    public static function endLogin()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['user']);
        session_destroy();
        return true;
    }
}