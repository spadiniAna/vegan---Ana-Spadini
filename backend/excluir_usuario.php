<?php

    include_once 'user_class.php';

    if(isset($_GET['id'])){
        
        $usuarios = new usuarios();

            $usuarios->set_id($_GET['id']);

        $usuarios->excluir();

    }

    header("location: ../frontend/inicio.php");

?>