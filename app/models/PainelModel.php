<?php

namespace App\Models;

class PainelModel
{
    public function login($name,$password)
    {
        if($name == "" || $password == "")
        {
            \App\Util\Util::alertJs("Fill all fields");
        }else{
            $sql = \App\Util\Sql::connect()->prepare("SELECT * FROM `tb_users` WHERE name = ? AND password = ?");
            $sql->execute(array($name,$password));
    
            if($sql->rowCount() == 1)
            {
                $info = $sql->fetch();
                $_SESSION['login_painel'] = true;
                $_SESSION['name'] = $info['name'];
                $_SESSION['password'] = $info['password'];
    
                header('Location: '.PATH_PAINEL);
                die();
            }
        }
    }

    public function loggout()
    {
        session_unset();
        session_destroy();
        header('Location: '.PATH);
        die();
    }
}