<?php

    require_once 'autoload.php';

    use Classes\Carnivoro;
    use Classes\Herbivoro;

    $carnivoro = new Carnivoro("Carne");
    $herbivoro = new Herbivoro("Legumes");

    $carnivoro->habitoAlimentar();
    $herbivoro->habitoAlimentar();

?>