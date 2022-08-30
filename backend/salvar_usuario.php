<?php

    include_once 'user_class.php';

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){

        $usuarios = new usuarios();

        if(isset($_POST['id'])){

            $usuarios->set_id($_POST['id']);

        }

        $usuarios->set_nome($_POST['nome']);
        $usuarios->set_email($_POST['email']);
        $usuarios->set_senha($_POST['senha']);

        $usuarios->cadastrar();

    }

    header('Location: ../frontend/login.php');

?>