<?php

    include_once 'mapa_class.php';

    if(isset($_GET['id'])){
        
        $mapa = new mapa();

            $mapa->set_id($_GET['id']);

        $mapa->excluir();

    }

    header("location: ../frontend/mapa.php");

?>