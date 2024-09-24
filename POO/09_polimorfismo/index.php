<?php
/* 
Polimorfismo consiste no conceito de alterar um método herdado de uma class pai/herdada.
*/
class Animal {
    public function andar() {
        echo "O ANIMAL está andando. <br>";
    }

    public function correr() {
        echo "O animal está correndo. <br>";
    }
}

class Cavalo extends Animal {
    public function andar() {
        echo "O CAVALO está trotando. <br>";
    }

    public function correr()
    {
        echo "O CAVALO está galopando. <br>";
    }
}

$animal = new Animal;
$animal->andar();
$animal->correr();

$cavalo = new Cavalo;
$cavalo->andar();
$cavalo->correr();