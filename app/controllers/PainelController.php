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
            header('Location: '.PATH.'/admin/login');
        }else{

            if(isset($_GET['loggout']))
            {
                $this->painelModel->loggout();
            }

            include('app/views/painel/painel.php');
        }
    }

    public function login($data)
    {
        if(isset($_POST['action']))
        {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $this->painelModel->login($name,$password);
        }

        include('app/views/painel/login.php');
    }
}