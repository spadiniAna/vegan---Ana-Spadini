<?php

    include_once 'receita_class.php';

    if(isset($_GET['id'])){
        
        $receitas = new receitas();

            $receitas->set_id($_GET['id']);

        $receitas->excluir();

    }

    header("location: ../frontend/receitas.php");

?>