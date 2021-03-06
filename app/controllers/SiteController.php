<?php

namespace App\Controllers;

class SiteController
{
    public $siteModel;
    
    public function __construct()
    { 
        $this->siteModel = new \App\Models\SiteModel; 
    }

    public function home($data)
    {
        $infoWeb = $this->siteModel->listingInfo();
        include("app/views/home.php");
    }
}