<?php

    include_once 'user.class.php';

    if(isset($_GET['id'])){
        
        $usuarios = new usuarios();

            $usuarios->setId($_GET['id']);

        $usuarios->excluir();

    }

    header("location: ../frontend/inicio.php");

?>