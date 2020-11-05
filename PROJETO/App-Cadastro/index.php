
<?php

require_once 'base.php';
?>

<div class="container">
            <h3 class="title form-title">CADASTRO DE CLIENTES</h3>

        <form action="cadastrar.php" method="POST" class="form">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-field" type="text" name="nome" id="nome" />
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input class="form-field" type="text" name="telefone" id="telefone" />
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-field" type="text" name="email" id="email" />
            </div>
            <input class="btn-enviar" type="submit" value="Enviar">
        </form>
    </div>
    <?php
        require_once 'footer.php';
    ?>
</body>

</html>