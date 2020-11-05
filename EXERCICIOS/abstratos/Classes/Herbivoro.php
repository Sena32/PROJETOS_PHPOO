<?php

    namespace Classes;

    class Herbivoro extends Animal{

    public function __construct($come) {
        parent::__construct($come);
    }  

    
        public function habitoAlimentar() {
            echo "<p>O Animal se alimenta de: <strong> {$this->getCome()}</strong></p>";
        }
    }

?>