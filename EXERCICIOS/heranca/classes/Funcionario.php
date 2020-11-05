<?php
    class Funcionario
    {
        private $nome;
        private $salario;

        public function __construct($nome, $salario)
        {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function relatorioFunc()
        {
            echo "<p> Nome:{$this->nome}</p>";
            echo "<p> Salario:{$this->salario}</p>";
        }

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
         * Get the value of salario
         */ 
        public function getSalario()
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         *
         * @return  self
         */ 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
    }

?>