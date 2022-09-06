<?php

    include_once 'mapa.class.php';

    if(isset($_POST['nome']) && isset($_POST['loc']) && isset($_POST['descr']) && isset($_POST['img'])){

        $mapa = new mapa();

        if(isset($_POST['id'])){

            $mapa->setId($_POST['id']);

        }

        $mapa->setNome($_POST['nome']);
        $mapa->setLoc($_POST['loc']);
        $mapa->setDescr($_POST['descr']);
        $mapa->setImg($_POST['img']);


        $mapa->inserir();

    }

    header('location: ../frontend/mapa.php');

?>