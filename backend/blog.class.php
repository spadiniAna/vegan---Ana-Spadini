<?php

    include_once 'conn.class.php';


    class blog extends conn{
        
        private $id;
        private $titulo;
        private $descr;
        private $texto;
        private $img;

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

        public function getDescr(){

            return $this->descr;

        }

        public function setDescr($a){

            $this->descr = $a;

        }
        
        public function getTexto(){

            return $this->texto;

        }

        public function setTexto($a){

            $this->texto = $a;

        }

        public function getImg(){

            return $this->img;

        }

        public function setImg($a){

            $this->img = $a;

        }
        
        public function inserir(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'UPDATE blogs
                            SET titulo = :titulo, descr = :descr, texto = :texto
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO blogs
                            (titulo, descr, texto)
                            VALUES(:titulo, :descr, :texto)
';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':titulo', $this->titulo);
                    $resultado->bindValue(':descr', $this->descr);
                    $resultado->bindValue(':texto', $this->texto);


                    if($this->id !== null && $this->id != ''){

                        $resultado->bindValue(':id', $this->id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'DELETE FROM blogs
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

                    $sql = 'SELECT * FROM blogs
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM blogs';

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

                    $sql = 'SELECT * FROM blogs
                            WHERE titulo LIKE :pesquisa';

                }else{

                    $sql = 'SELECT * FROM blogs';

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