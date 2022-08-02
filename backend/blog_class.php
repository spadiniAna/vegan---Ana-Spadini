<?php

    include_once 'conn.class.php';

    session_start();
    session_regenerate_id();

    class blog extends conn{
        
        private $id;
        private $titulo;
        private $descr;
        private $texto;

        public function get_id(){

            return $this->id;

        }

        public function set_id($valor){

            $this->id = $valor;

        }
        
        public function get_titulo(){

            return $this->titulo;

        }

        public function set_titulo($valor){

            $this->titulo = $valor;

        }

        public function get_descr(){

            return $this->descr;

        }

        public function set_descr($valor){

            $this->descr = $valor;

        }
        
        public function get_texto(){

            return $this->texto;

        }

        public function set_texto($valor){

            $this->texto = $valor;

        }
        
        public function inserir_blog(){

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

        public function excluir_blog(){

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

        public function listar_blog(){

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
        
        public function busca_blog($pesquisa){

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