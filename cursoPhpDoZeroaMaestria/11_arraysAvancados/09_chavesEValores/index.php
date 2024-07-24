<?php
$carro = [
    "marca" => "chevrolet",
    "modelo" => "celta",
    "ano" => 2006,
    "potencia" => 1.6,
    "cor" => "prata"
];

$chaves = array_keys($carro);
$valores = array_values($carro);

print_r($chaves);
echo "<br>";

print_r($valores);
echo "<br>";