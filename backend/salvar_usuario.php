<?php

    include_once 'user.class.php';

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){

        $usuarios = new usuarios();

        if(isset($_POST['id'])){

            $usuarios->setId($_POST['id']);

        }

        $usuarios->setNome($_POST['nome']);
        $usuarios->setEmail($_POST['email']);
        $usuarios->setSenha($_POST['senha']);

        $usuarios->cadastrar();

    }

    header('Location: ../frontend/login.php');

?>