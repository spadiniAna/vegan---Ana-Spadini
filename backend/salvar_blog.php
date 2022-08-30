<?php

    include_once 'blog_class.php';

    if(isset($_POST['titulo']) && isset($_POST['descr']) && isset($_POST['texto']) && isset($_POST['img'])){

        $blog = new blog();

        if(isset($_POST['id'])){

            $blog->set_id($_POST['id']);

        }

        $blog->set_titulo($_POST['titulo']);
        $blog->set_descr($_POST['descr']);
        $blog->set_texto($_POST['texto']);
        $blog->set_img($_POST['img']);


        $blog->inserir();

    }

    header('location: ../frontend/blog.php');

?>