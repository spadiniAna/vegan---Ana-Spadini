<?php

    include_once 'blog_class.php';

    if(isset($_GET['id'])){
        
        $blog = new blog();

            $blog->set_id($_GET['id']);

        $blog->excluir();

    }

    header("location: ../frontend/blog.php");

?>