<?php
$pessoa = new class() {
    private $nome;

    public function setNome($n) {
        $this->nome = $n;
    }
    
    public function getNome() {
        return $this->nome;
    }
};

$pessoa->setNome("Vitor");
echo $pessoa->getNome();
