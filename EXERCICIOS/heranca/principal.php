<?php 
    require_once "classes/Funcionario.php";
    require_once "classes/Gerente.php";
    require_once "classes/Programador.php";

    $gerente = new Gerente("Felipe",1000,"ERP");
    $programador = new Programador("Sena",2000,"PHP");

    $gerente->relatorioFunc();
    $programador->relatorioFunc();

?>