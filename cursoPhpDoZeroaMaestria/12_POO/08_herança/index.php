<?php
class Pessoa {
    protected $nome = "Vitor";
    private $idade = 29;

    protected function getIdade() {
        return $this->idade;
    }


}

class Dev extends Pessoa {
    private $linguagensProg = ["JavaScript", "PHP", "Python"];
    private $senioridade = "Junior";
    
    function getNome() {
        return $this->nome;
    }

    function getIdadeDev() {
        return $this->getIdade();
    }
}

$vitor = new Dev;
echo $vitor->getNome() . "<br>";

echo $vitor->getIdadeDev();
