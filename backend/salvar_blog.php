<?php

    include_once 'blog.class.php';

    if(isset($_POST['titulo']) && isset($_POST['descr']) && isset($_POST['texto']) && isset($_POST['img'])){

        $blog = new blog();

        if(isset($_POST['id'])){

            $blog->setId($_POST['id']);

        }

        $blog->setTitulo($_POST['titulo']);
        $blog->setDescr($_POST['descr']);
        $blog->setTexto($_POST['texto']);
        $blog->setImg($_POST['img']);


        $blog->inserir();

    }

    header('location: ../frontend/blog.php');

?>