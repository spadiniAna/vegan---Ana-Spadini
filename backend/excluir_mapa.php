<?php

    include_once 'mapa.class.php';

    if(isset($_GET['id'])){
        
        $mapa = new mapa();

            $mapa->setId($_GET['id']);

        $mapa->excluir();

    }

    header("location: ../frontend/mapa.php");

?>