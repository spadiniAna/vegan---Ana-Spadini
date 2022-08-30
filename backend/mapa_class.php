<?php

    include_once 'conn_class.php';

    session_start();

    class mapa extends conn{

        private $id;
        private $nome;
        private $loc;
        private $descr;
        private $img;


        public function get_id(){

            return $this->id;

        }
        public function get_nome(){

            return $this->nome;

        }
        public function get_loc(){

            return $this->loc;

        }
        public function get_descr(){

            return $this->descr;

        }
        public function get_img(){

            return $this->img;

        }
        
        public function set_id($a){

            $this->id = $a;

        }
        
        public function set_nome($a){

            $this->nome = $a;

        }
        
        public function set_loc($a){

            $this->loc = $a;

        }
        
        public function set_descr($a){

            $this->descr = $a;

        }
        
        public function set_img($a){

            $this->img = $a;

        }

        public function inserir(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'UPDATE mapa
                            SET nome = :nome, loc = :loc, descr = :descr, img = :img
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO mapa
                            (nome, loc, descr, img)
                            VALUES(:nome, :loc, :descr, :img)
';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':nome', $this->nome);
                    $resultado->bindValue(':loc', $this->loc);
                    $resultado->bindValue(':descr', $this->descr);
                    $resultado->bindValue(':img', $this->img);

                    if($this->id !== null && $this->id != ''){

                        $resultado->bindValue(':id', $this->id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir(){

            $pdo = $this->connect();

                if($this->id !== null && $this->id != ''){

                    $sql = 'DELETE FROM mapa
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

                    $sql = 'SELECT * FROM mapa
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM mapa';

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

                    $sql = 'SELECT * FROM mapa
                            WHERE nome LIKE :pesquisa 
                            OR loc LIKE :pesquisa
                            OR descr LIKE :pesquisa';


                }else{

                    $sql = 'SELECT * FROM mapa';

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
