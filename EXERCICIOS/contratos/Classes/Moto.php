<?php

namespace Classes;

use Interfaces\ICaracteristicas;

class Moto  extends Veiculo implements ICaracteristicas
{
    function exibirNome()
    {
        echo "<p>O nome da MOTO É <strong>{$this->getNome()}</strong></p>";
    }
    function exibirMarca()
    {
        echo "<p>A marca da MOTO É <strong>{$this->getMarca()}</strong></p>";
    }
    function exibirModelo()
    {
        echo "<p>O modelo da MOTO É <strong>{$this->getModelo()}</strong></p>";
    }
}

?>