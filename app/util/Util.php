<?php

namespace App\Util;

class Util
{
    public static function alertJs($msg)
    {
        echo "<script>alert('$msg.')</script>";
    }
}