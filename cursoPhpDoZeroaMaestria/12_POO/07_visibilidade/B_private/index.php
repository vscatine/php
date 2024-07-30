<?php
// Private: A propriedade ou método podem ser acessados apenas pela classe que foram criados.
class Carro {
    private $rodas = 4;
    private $portas = 2;

    function setRodas($numRodas) {
        $this->rodas = $numRodas;
    }

    function setPortas($numPortas) {
        $this->portas = $numPortas;
    }

    function getRodas() {
        return $this->rodas;
    }
    function getPortas() {
        return $this->portas;
    }
}

class Mecanico {
    public function alteraRodas($carro, $qtdRodas) {
        $carro->setRodas($qtdRodas);
    }

    public function alteraPortas($carro, $qtdPortas) {
        $carro->setPortas($qtdPortas);
    }
}

$kombi = new Carro;
$joao = new Mecanico;

$joao->alteraRodas($kombi, 5);
$joao->alteraPortas($kombi, 3);

echo $kombi->getRodas() . "<br>";
echo $kombi->getPortas() . "<br>";

//Erro, não é possível acessar as propriedades diretamente.
echo $kombi->rodas . "<br>";
echo $kombi->portas . "<br>";