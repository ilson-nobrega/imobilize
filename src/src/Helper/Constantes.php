<?php
namespace Imobilize\Src\Helper;

class Constantes
{
    //Sexo
    const SEX_001 = 'Masculino';
    const SEX_002 = 'Feminino';
    const SEX_003 = 'Outros';

    public static function getSex($id){
        echo constant('SEX_00'.$id);
    }
}