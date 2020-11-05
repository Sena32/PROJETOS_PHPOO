
<?php

// 1ª e 2ª Etapa - Conexão com um SGBD e com uma base de dados específica
$servidor = new PDO('mysql:host=localhost;dbname=livros', 'root', '');

$tabela = $servidor->query("SELECT id, nome FROM famosos");

if($tabela) {
    echo "
    <table border='1'>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>OPÇÕES</td>
        </tr>
    ";
    foreach($tabela as $linha) {
        $id = $linha['id'];
        echo "
        <tr>
            <td>" . $linha['id'] . "</td>
            <td>" . $linha['nome'] . "</td>
            <td><a href='exemploDelete.php?id=$id'>Excluir</a></td>
        </tr>";
    }
    echo "</table>";
}

$servidor = null;

?>