<?php
//Public: A propriedade ou método podem ser acessados de qualquer forma;
class Carro {
    public $rodas = 4;
    public $portas = 2;
}

class Mecanico {
    public function alteraRodas($carro, $qtdRodas) {
        $carro->rodas = $qtdRodas;
    }

    public function alteraPortas($carro, $qtdPortas) {
        $carro->portas = $qtdPortas;
    }
}

$kombi = new Carro;
$joao = new Mecanico;

$joao->alteraRodas($kombi, 5);
$joao->alteraPortas($kombi, 3);

echo $kombi->rodas . "<br>";
echo $kombi->portas . "<br>";