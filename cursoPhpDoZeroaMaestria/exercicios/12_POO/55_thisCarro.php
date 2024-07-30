<?php
class Carro {
    public $marca;
    public $modelo;
    public $velMax;

    function defineMarca($marca) {
        $this->marca = $marca;
    }

    function defineModelo($modelo) {
        $this->modelo = $modelo;
    }

    function defineVelMax($velocidade) {
        $this->velMax = $velocidade;
    }

    function getVelmax() {
        return $this->velMax;
    }
}

$palio = new Carro;
$palio->defineMarca("Fiat");
$palio->defineModelo("Palio");
$palio->defineVelMax(120);

echo "Marca: $palio->marca<br>Modelo: $palio->modelo<br> Velocidade máxima: " . $palio->getVelmax() . " km/h<br>";