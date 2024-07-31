<?php
class Car {
    protected $marca;
    protected $modelo;
    protected $cor;

    public function __construct($ma, $mo, $c) {
        $this->marca = $ma;
        $this->modelo = $mo;
        $this->cor = $c;
    }

    public function getCar() {
        return "<ul>
            <li>Marc: $this->marca</li>
            <li>Modelo: $this->modelo</li>
            <li>Cor: $this->cor</li>
        <ul>";
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCor() {
        return $this->cor;
    }
}

$fusca = new Car("Volkswagen", "Fusca", "azul bebê");
echo $fusca->getCar();