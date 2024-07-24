<?php
$arr = [6, 85, 158, 0.1, 8, 13, 5, 1.9, 0.01, 10];

sort($arr);
print_r($arr);
echo "<br>";

rsort($arr);
print_r($arr);
echo "<br><br>";

$nomes = ["vitor", "gabriela", "cristiane", "ari", "eike", "josé francisco", "tania"];

sort($nomes);
print_r($nomes);
echo "<br>";

rsort($nomes);
print_r($nomes);
echo "<br><br>";

$mixArr = [];
for ($c=0; $c < count($arr); $c++) {
    $mixArr[] = $arr[$c];
}

for ($i=0; $i < count($nomes); $i++) {
    $mixArr[] = $nomes[$i];
}

var_dump($mixArr);
echo "<br>";

sort($mixArr);
print_r($mixArr);
echo "<br>";

rsort($mixArr);
print_r($mixArr);
echo "<br>";