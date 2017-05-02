<?php

namespace Imobilize\Src\Helper;

class Library
{
    protected static $hashOptions = ['cost' => 11];

    public static function encryptField($value)
    {
        return password_hash(
            $value, PASSWORD_BCRYPT, self::$hashOptions);
    }

    public static function verifyEncryptedFieldValue($encryptedValue, $value)
    {
        return password_verify($value, $encryptedValue);
    }
}