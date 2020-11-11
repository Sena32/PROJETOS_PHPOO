<?php

    class Produto
    {
        private $quantidade;
        private $descricao;
        private $nome;


        //Getters and Setters por sobrecarga\overloading

        function __set($atributo, $value)
        {
            $this->$atributo = $value;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }



 
    }

    $x = new Produto();
    $x->__set('nome','CD');
    $x->__set('quantidade',2);
    $x->__set('descricao','Esse é bom!');

    
    var_dump($x->__get('nome'));
    var_dump($x->__get('quantidade'));
    var_dump($x->__get('descricao'));


?>