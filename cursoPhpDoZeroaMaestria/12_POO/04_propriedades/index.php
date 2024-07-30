<?php
class Car {
    public $marca = "chevrolet";
    public $modelo = "celta";
    public $ano = 2006;
    public $cor = "preto";

    function ligar() {
        echo "O carro está ligado. <br>";
    }
}

$carro = new Car;
echo $carro->marca;
echo "<br>";
echo $carro->modelo;
echo "<br>";
echo $carro->ano;
echo "<br>";
echo $carro->cor;
echo "<br>";

echo "<br><b>Novo Carro (Objeto)</b><br>";

$uno = new Car;
$uno->marca = "fiat";
$uno->modelo = "uno";
$uno->ano = 1999;
$uno->cor = "vermelho";

echo $uno->marca;
echo "<br>";
echo $uno->modelo;
echo "<br>";
echo $uno->ano;
echo "<br>";
echo $uno->cor;
echo "<br>";
$uno->ligar();