<?php
class Pessoa {
    function falar() {
        echo "Eu sou um objeto! <br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

$vitor = new Pessoa;
$vitor->falar();

$joao = new Pessoa;
$joao->falar();

$vitor->somar(4, 9);
$joao->somar(5,23);