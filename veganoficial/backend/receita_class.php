<?php

    include_once 'conn.class.php';

    session_start();
    session_regenerate_id();

    class receitas extends conn{

        private $id;
        private $titulo;
        private $img;
        private $tempo;
        private $dificuldade;
        private $rendimento;
        private $ingredientes;
        private $preparo;

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

        public function get_img(){

            return $this->img;

        }

        public function set_img($valor){

            $this->img = $valor;

        }

        public function get_tempo(){

            return $this->tempo;

        }

        public function set_tempo($valor){

            $this->tempo = $valor;

        }

        public function get_dificuldade(){

            return $this->dificuldade;

        }

        public function set_dificuldade($valor){

            $this->dificuldade = $valor;

        }

        public function get_rendimento(){

            return $this->rendimento;

        }

        public function set_rendimento($valor){

            $this->rendimento = $valor;

        }

        public function get_ingredientes(){

            return $this->ingredientes;

        }

        public function set_ingredientes($valor){

            $this->ingredientes = $valor;

        }

        public function get_preparo(){

            return $this->preparo;

        }

        public function set_preparo($valor){

            $this->preparo = $valor;

        }


        public function inserir_receita(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'UPDATE receitas
                            SET titulo = :titulo, img = :img, tempo = :tempo, dificuldade = :dificuldade, rendimento = :rendimento, ingredientes = :ingredientes, preparo = :preparo
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO receitas
                            (titulo, img, tempo, dificuldade, rendimento, ingredientes, preparo)
                            VALUES(:titulo, :img, :tempo, :dificuldade, :rendimento, :ingredientes, :preparo)
';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':titulo', $this->titulo);
                    $resultado->bindValue(':img', $this->img);
                    $resultado->bindValue(':tempo', $this->tempo);
                    $resultado->bindValue(':dificuldade', $this->dificuldade);
                    $resultado->bindValue(':rendimento', $this->rendimento);
                    $resultado->bindValue(':ingredientes', $this->ingredientes);
                    $resultado->bindValue(':preparo', $this->preparo);


                    if($this->id !== null && $this->id != ''){

                        $resultado->bindValue(':id', $this->id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir_receita(){

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

        public function listar_receita(){

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
        
        public function busca_receita($pesquisa){

            $pdo = $this->connect();

                if($pesquisa != ''){

                    $sql = 'SELECT * FROM receitas
                            WHERE titulo LIKE :pesquisa';

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
