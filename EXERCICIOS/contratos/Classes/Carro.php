<?php
namespace Classes;

use Interfaces\ICaracteristicas;

class Carro  extends Veiculo implements ICaracteristicas
{
    function exibirNome()
    {
        echo "<p>O nome do CARRO É <strong>{$this->getNome()}</strong></p>";
    }
    function exibirMarca()
    {
        echo "<p>A marca do CARRO É <strong>{$this->getMarca()}</strong></p>";
    }
    function exibirModelo()
    {
        echo "<p>O modelo do CARRO É <strong>{$this->getModelo()}</strong></p>";
    }
}

?>