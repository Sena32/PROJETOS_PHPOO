<?php

    namespace Classes;
    use \PDO;

class Cadastro
    {
        private $nome;
        private $telefone;
        private $email;

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function inserir()
        {
                // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
            $conn = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

            $query = $conn->prepare("INSERT INTO cadastro (nome,telefone, email) VALUES (:nome,:telefone, :email)");
            
            $nome = $this->getNome();
            $telefone = $this->getTelefone();
            $email = $this->getEmail();

            $query->bindParam(':nome',$nome);
            $query->bindParam(':telefone',$telefone);
            $query->bindParam(':email',$email);



            $query->execute();
        }

        public function exibir()
        {
                // 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
            $conn = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

            $query = $conn->prepare("SELECT * FROM cadastro");

            $query->execute();
            $tabela = $query->fetchAll(PDO::FETCH_ASSOC);

            // return $tabela;
                echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><meta name='viewport' content='width=device-width, initial-scale=1.0'><title>App de Cadastro</title><link rel='stylesheet' href='css/style.css'><link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'></head>";
                echo "<body><header><div class='brand'><h4><span>O</span>RANGE</h4><span>Sistema de Cadastro</span></div><nav><ul><li><a href='index.php'><i class='large material-icons'>people</i>Clientes</a></li><li><a href='lista_usuarios.php'><i class='large material-icons'>assignment</i>Listagem</a></li></ul></nav></header>";
                echo "<div class='container'>";
                echo "<div class='group-header'><h3 class='title'>LISTAGEM DE CLIENTES</h3><a href='index.php' class='btn-enviar btn-add'><i class='material-icons'>add</i></a></div>";
                echo "<table>";
                echo"<thead><tr><td>Nome</td><td>Email</td><td>Telefone</td></tr></thead>";
                        echo "<tbody>";
                            
                            foreach($tabela as $linha) {

                            
                                echo "<tr><td>{$linha['nome']}</td><td>{$linha['email']}</td><td>{$linha['telefone']}</td></tr>";
                            
                                }
                        
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                echo "<footer><h4>Bem-vindo</h4><h5> &copy; Copywriter - 2020</p></footer>";
        }
        
    }