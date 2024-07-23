<?php
$carro = ["Jaqguar", 3.0, "azul", "teto solar", "automático"];
list($marca, $potencia, $cor, $adicional, $cambio) = $carro;

print_r($carro);
echo "<br>";

echo $marca . "<br>";
echo number_format($potencia, 1) . "<br>";
echo $cor . "<br>";
echo $adicional . "<br>";
echo $cambio . "<br>";