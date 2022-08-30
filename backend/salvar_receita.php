<?php

    include_once 'receita_class.php';

    if(isset($_POST['titulo']) && isset($_POST['img']) && isset($_POST['tempo']) && isset($_POST['rende']) && isset($_POST['categoria']) && isset($_POST['dificuldade']) && isset($_POST['ingr']) && isset($_POST['preparo'])){

        $receitas = new receitas();

        if(isset($_POST['id'])){

            $receitas->set_id($_POST['id']);

        }

        $receitas->set_titulo($_POST['titulo']);
        $receitas->set_img($_POST['img']);
        $receitas->set_tempo($_POST['tempo']);
        $receitas->set_rende($_POST['rende']);
        $receitas->set_categoria($_POST['categoria']);
        $receitas->set_dificuldade($_POST['dificuldade']);
        $receitas->set_ingr($_POST['ingr']);
        $receitas->set_preparo($_POST['preparo']);


        $receitas->inserir();

    }

    header('location: ../frontend/receitas.php');

?>