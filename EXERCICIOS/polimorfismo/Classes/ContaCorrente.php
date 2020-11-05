<?php

    namespace Classes;

    class ContaCorrente extends Conta
    {
        public function saca($valor) 
        {
            if($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo()-$valor-0.1);
            }
            else {
                echo "Saldo insuficiente";
            }
        }
    }

?>