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

            if(isset($_POST['action']))
            {
                $title_header = $_POST['header'];
                $header_icon = $_POST['icon'];

                $text = $_POST['text'];

                $title_box = $_POST['title-box'];
                $box1_icon = $_POST['box1-icon'];
                $box1_text = $_POST['box1-text'];

                $box2_icon = $_POST['box2-icon'];
                $box2_text = $_POST['box2-text'];

                $box3_icon = $_POST['box3-icon'];
                $box3_text = $_POST['box3-text'];

                $this->painelModel->editWeb($title_header,$header_icon,$text,$title_box,$box1_icon,$box1_text,$box2_icon,$box2_text,$box3_icon,$box3_text);
            }

            $info = $this->painelModel->listing();

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