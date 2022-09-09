<?php

    include_once 'conn.class.php';


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

        public function getId(){

            return $this->id;

        }

        public function setId($a){

            $this->id = $a;

        }
        
        public function getTitulo(){

            return $this->titulo;

        }

        public function setTitulo($a){

            $this->titulo = $a;

        }

        public function getImg(){

            return $this->img;

        }

        public function setImg($a){

            $this->img = $a;

        }

        public function getTempo(){

            return $this->tempo;

        }

        public function setTempo($a){

            $this->tempo = $a;

        }

        public function getCategoria(){

            return $this->categoria;

        }

        public function setCategoria($a){

            $this->categoria = $a;

        }

        public function getDificuldade(){

            return $this->dificuldade;

        }

        public function setDificuldade($a){

            $this->dificuldade = $a;

        }

        public function getRende(){

            return $this->rende;

        }

        public function setRende($a){

            $this->rende = $a;

        }

        public function getIngr(){

            return $this->ingr;

        }

        public function setIngr($a){

            $this->ingr = $a;

        }

        public function getPreparo(){

            return $this->preparo;

        }

        public function setPreparo($a){

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
