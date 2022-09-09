<?php

    include_once 'receita.class.php';

    if(isset($_POST['titulo']) && isset($_POST['img']) && isset($_POST['tempo']) && isset($_POST['rende']) && isset($_POST['categoria']) && isset($_POST['dificuldade']) && isset($_POST['ingr']) && isset($_POST['preparo'])){

        $receitas = new receitas();

        if(isset($_POST['id'])){

            $receitas->setId($_POST['id']);

        }

        $receitas->setTitulo($_POST['titulo']);
        $receitas->setImg($_POST['img']);
        $receitas->setTempo($_POST['tempo']);
        $receitas->setRende($_POST['rende']);
        $receitas->setCategoria($_POST['categoria']);
        $receitas->setDificuldade($_POST['dificuldade']);
        $receitas->setIngr($_POST['ingr']);
        $receitas->setPreparo($_POST['preparo']);


        $receitas->inserir();

    }

    header('location: ../frontend/receitas.php');

?>