<?php

namespace App\Controllers;

class PainelController
{
    public $painelModel;

    public function __construct()
    {
        $this->painelModel = new \App\Models\PainelModel;
    }

    public function home()
    {
        if(!isset($_SESSION['login_painel']))
        {
            include('app/views/painel/login.php');
        }else{
            include('app/views/painel/painel.php');
        }
    }

    public function login()
    {
        include('app/views/painel/login.php');
    }
}