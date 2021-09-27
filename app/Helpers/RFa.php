<?php

namespace App\Helpers;

class RFa
{
    public static function short_title($title)
    {
        $res = mb_substr($title,0,70);
        return $res.' ...';
    }
}
