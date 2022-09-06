<?php

    include_once 'receita.class.php';

    if(isset($_GET['id'])){
        
        $receitas = new receitas();

            $receitas->setId($_GET['id']);

        $receitas->excluir();

    }

    header("location: ../frontend/receitas.php");

?>