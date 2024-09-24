<?php

class Pessoa {
    //atributos
    public $nome;
    public $idade;

    //métodos
    public function falar() {
        echo $this->nome . " de " . $this->idade . " anos, acabou de falar.";
    }
}

$vitor = new Pessoa();
$vitor->nome = "Vitor Scatine";
$vitor->idade = 29;

$vitor->falar();