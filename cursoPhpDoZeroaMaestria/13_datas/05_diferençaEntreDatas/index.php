<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2003, 07, 01);
$dataB->setTime(20, 45, 13);

$dataDif = $dataA->diff($dataB);

print_r($dataA);
echo "<br>";

print_r($dataB);
echo "<br>";

print_r($dataDif);
echo "<br>";

echo $dataDif->format("%a days");