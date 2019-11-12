<?php

namespace App\Helpers;
class DammAlgorithm
{
    /**
     * Crea un nuevo digito verificador
     * 
     * @param $number - numero base a partir el cual se creara el digito verificador
     */
    public function CheckSum($number)
    {
        $table = "0317598642709215486342068713591750983426612304597836742095815869720134894536201794386172052581436790";
        $interim = '0';
        $numLen = strlen($number);

        for ($i = 0; $i < $numLen; ++$i) {
            if (($number[$i] - '0') > 9)
                return '-';

            $interim = $table[($number[$i] - '0') + ($interim - '0') * 10];
        }

        return $interim;
    }

    public function Validate($number)
    {
        return CheckSum($number) == '0';
    }
}
