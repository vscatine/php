<?php
$arr = [
    "vitor" => 30,
    "gabriela" => 29,
    "cristiane" => 56,
    "eike" => 17,
    "tania" => 56,
    "jose" => 51,
    "ari" => 50
];

//ordena pelo valor.
asort($arr);
print_r($arr);
echo "<br>";

arsort($arr);
print_r($arr);
echo "<br>";

//ordena pela chave
ksort($arr);
print_r($arr);
echo "<br>";

krsort($arr);
print_r($arr);
echo "<br>";