<?php

    require_once "classes/Funcionario.php";
    require_once "classes/Gerente.php";
    require_once "classes/Programador.php";

    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $cargo = $_POST['cargo'];
    $obs = $_POST['obs'];

    if($cargo == "gerente"){
        $funcionario = new Gerente($nome,$salario,$obs);

    }
    else{
        $funcionario = new Programador($nome,$salario,$obs);

    }

    $funcionario->relatorioFunc();


?>