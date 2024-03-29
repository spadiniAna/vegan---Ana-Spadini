<?php

    include_once 'conn.class.php';


    class usuarios extends conn {
    
        private $id;
        private $nome = "";
        private $email = "";
        private $senha = "";        
    
        
        public function getId(){

            return $this->id;

        }

        public function getNome(){

            return $this->nome;

        }

        public function setId($a){

            $this->id = $a;

        }

        public function setNome($a){

            $this->nome = $a;

        }
        public function getEmail(){

            return $this->email;

        }

        public function getSenha(){

            return $this->senha;

        }

        public function setEmail($a){

            $this->email = $a;

        }

        public function setSenha($a){

            $this->senha = $a;

        }

        

    public function cadastrar(){

        $pdo = $this->connect();

            if($this->id !== null && $this->id != ''){

                $sql = 'UPDATE usuarios
                        SET nome = :nome, email = :email, senha = :senha
                        WHERE id = :id';

            }else{

                $sql = 'INSERT INTO usuarios
                        (nome, email, senha)
                        VALUES(:nome, :email, :senha)';

            }

            $resultado = $pdo->prepare($sql);

                $resultado->bindValue(':nome', $this->nome);
                $resultado->bindValue(':email', $this->email);
                $resultado->bindValue(':senha', $this->senha);

                if($this->id !== null && $this->id != ''){

                    $resultado->bindValue(':id', $this->id);

                }

            $resultado->execute();
            
        $pdo = $this->disconnect();

    }

    public function excluir(){

        $pdo = $this->connect();

            if($this->id !== null && $this->id != ''){

                $sql = 'DELETE FROM usuarios
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

                $sql = 'SELECT * FROM usuarios
                        WHERE id = :id';

            }else{

                $sql = 'SELECT * FROM usuarios';

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

                $sql = 'SELECT * FROM usuarios
                        WHERE nome LIKE :pesquisa
                        OR email LIKE :pesquisa';

            }else{

                $sql = 'SELECT * FROM usuarios';

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