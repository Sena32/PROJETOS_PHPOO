<?php

    require_once 'autoload.php';

    use Classes\Conta;
    use Classes\ContaCorrente;
    use Classes\ContaPoupanca;

    $cp = new ContaPoupanca(500);
    $cc = new ContaCorrente(200);

    $cp->saca(100);
    $cc->saca(100);

    $cp->imprimeExtrato();
    $cc->imprimeExtrato();

?>