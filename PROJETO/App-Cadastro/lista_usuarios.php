<?php
require_once 'base.php';

$conn = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');
                    
$query = $conn->prepare("SELECT * FROM cadastro");
$query->execute();
        
$tabela = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <div class="group-header">        
        <h3 class="title">LISTAGEM DE CLIENTES</h3>
        <a href='index.php' class='btn-enviar btn-add'><i class='material-icons'>add</i></a>
    </div>

        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefone</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($tabela as $linha) {

                ?>
            <tr>
                    <td><?=$linha['nome']?></td>
                    <td><?=$linha['email']?></td>
                    <td><?=$linha['telefone']?></td>
                </tr>
                <?php
                    }
                    $conn = null;
                ?>
            </tbody>
        </table>
    </div>
    
    <?php
        require_once 'footer.php';
    ?>
</body>

</html>