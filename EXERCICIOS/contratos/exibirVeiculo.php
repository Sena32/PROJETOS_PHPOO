<?php

// require_once 'Classes/Veiculo.php';
// require_once 'Classes/Moto.php';
// require_once 'Classes/Carro.php';

require_once 'autoload.php';

use Classes\Veiculo;
use Classes\Carro;
use Classes\Moto;


    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $veiculo = $_POST['veiculo'];

    if($veiculo == "moto"){
        $veiculo = new Moto();

    }
    else{
        $veiculo = new Carro();

    }

    $veiculo->setNome($nome);
    $veiculo->setMarca($marca);
    $veiculo->setModelo($modelo);

    $veiculo->exibirNome();
    $veiculo->exibirMarca();
    $veiculo->exibirModelo();




?>