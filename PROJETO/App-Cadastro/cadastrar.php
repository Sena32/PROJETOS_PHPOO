<?php
require_once 'autoload.php';
use Classes\Cadastro;

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

if (isset($nome) && $nome!=""  && isset($telefone) && $telefone!=""  && isset($email) && $email!=""){
    $cadastro = new Cadastro();

    
    $cadastro->setNome($nome);
    $cadastro->setTelefone($telefone);
    $cadastro->setEmail($email);

    $cadastro->inserir();
    $cadastro->exibir();
}else{
    
    header("Location: index.php",$msg="Teste vazio");
    die();
}



?>