<?php
$carro = [
    "marca" => "fiat",
    "modelo" => "500",
    "ano" => 2015,
    "cor" => "creme"
];

extract($carro);
echo $marca , "<br>";
echo $modelo , "<br>";
echo $ano , "<br>";
echo $cor , "<br>";