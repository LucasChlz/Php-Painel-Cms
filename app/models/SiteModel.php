<?php

namespace App\Models;

class SiteModel
{
    public function listingInfo()
    {
        $sql = \App\Util\Sql::connect()->prepare("SELECT * FROM `tb_configs`");
        $sql->execute();
        return $sql->fetch();
    }
}