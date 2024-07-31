<?php
trait Pessoa {
    protected $nome;
    protected $idade;

    public function falarNome() {
        return "Meu nome é $this->nome.";
    }
}

class Dev {
    use Pessoa;
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = $n;
    }
}

$vitor = new Dev;
echo $vitor->getNome();
echo "<br>";

$vitor->setNome("Vitor");
echo $vitor->getNome();
echo "<br>";

echo $vitor->falarNome();
echo "<br>";