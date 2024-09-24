<?php

class Pessoa {
    public const nome = "Vitor";

    public function exibirNome() {
        echo self::nome . "<br>";
    }
}

class Vitor extends Pessoa {
    public const nome = "Viana";

    public function exibirNome()
    {
        echo parent::nome . "<br>";
    }
}

$pessoa = new Pessoa;
$pessoa->exibirNome();
echo $pessoa::nome;
echo "<br>";

$vitor = new Vitor;
echo $vitor::nome;
echo "<br>";
$vitor->exibirNome();