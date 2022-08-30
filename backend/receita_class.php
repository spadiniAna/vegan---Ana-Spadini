<?php

    include_once 'conn_class.php';

    session_start();

    class receitas extends conn{

        private $id;
        private $titulo;
        private $img;
        private $tempo;
        private $categoria;
        private $dificuldade;
        private $rende;
        private $ingr;
        private $preparo;

        public function get_id(){

            return $this->id;

        }

        public function set_id($a){

            $this->id = $a;

        }
        
        public function get_titulo(){

            return $this->titulo;

        }

        public function set_titulo($a){

            $this->titulo = $a;

        }

        public function get_img(){

            return $this->img;

        }

        public function set_img($a){

            $this->img = $a;

        }

        public function get_tempo(){

            return $this->tempo;

        }

        public function set_tempo($a){

            $this->tempo = $a;

        }

        public function get_categoria(){

            return $this->categoria;

        }

        public function set_categoria($a){

            $this->categoria = $a;

        }

        public function get_dificuldade(){

            return $this->dificuldade;

        }

        public function set_dificuldade($a){

            $this->dificuldade = $a;

        }

        public function get_rende(){

            return $this->rende;

        }

        public function set_rende($a){

            $this->rende = $a;

        }

        public function get_ingr(){

            return $this->ingr;

        }

        public function set_ingr($a){

            $this->ingr = $a;

        }

        public function get_preparo(){

            return $this->preparo;

        }

        public function set_preparo($a){

            $this->preparo = $a;

        }


        public function inserir(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'UPDATE receitas
                            SET titulo = :titulo, img = :img, tempo = :tempo, categoria = :categoria, dificuldade = :dificuldade, rende = :rende, ingr = :ingr, preparo = :preparo
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO receitas
                            (titulo, img, tempo, categoria, dificuldade, rende, ingr, preparo)
                            VALUES(:titulo, :img, :tempo, :categoria, :dificuldade, :rende, :ingr, :preparo)
';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':titulo', $this->titulo);
                    $resultado->bindValue(':img', $this->img);
                    $resultado->bindValue(':tempo', $this->tempo);
                    $resultado->bindValue(':categoria', $this->categoria);
                    $resultado->bindValue(':dificuldade', $this->dificuldade);
                    $resultado->bindValue(':rende', $this->rende);
                    $resultado->bindValue(':ingr', $this->ingr);
                    $resultado->bindValue(':preparo', $this->preparo);


                    if($this->id !== null && $this->id != ''){

                        $resultado->bindValue(':id', $this->id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'DELETE FROM receitas
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'SELECT * FROM receitas
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM receitas';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->id !== null && $this->id != ''){

                        $resultado->bindValue(':id', $this->id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }
        
        public function busca($pesquisa){

            $pdo = $this->connect();

                if($pesquisa != ''){

                    $sql = 'SELECT * FROM receitas
                            WHERE titulo LIKE :pesquisa 
                            OR categoria LIKE :pesquisa';

                }else{

                    $sql = 'SELECT * FROM receitas';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($pesquisa != ''){

                        $resultado->bindValue(':pesquisa', '%'.$pesquisa.'%');
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }
    }

?>
