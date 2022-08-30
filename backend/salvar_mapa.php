<?php

    include_once 'mapa_class.php';

    if(isset($_POST['nome']) && isset($_POST['loc']) && isset($_POST['descr']) && isset($_POST['img'])){

        $mapa = new mapa();

        if(isset($_POST['id'])){

            $mapa->set_id($_POST['id']);

        }

        $mapa->set_nome($_POST['nome']);
        $mapa->set_loc($_POST['loc']);
        $mapa->set_descr($_POST['descr']);
        $mapa->set_img($_POST['img']);


        $mapa->inserir();

    }

    header('location: ../frontend/mapa.php');

?>