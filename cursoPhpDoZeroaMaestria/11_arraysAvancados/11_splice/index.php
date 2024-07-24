<?php
//Resgatar elementos
//Remover elementos

$arr = [1, 2, 3, 4, 5, 6];
$arrSpli = array_splice($arr, 2);
print_r($arrSpli);
echo "<br><br>";

$arr = [1, 2, 3, 4, 5, 6];
$arrSpli = array_splice($arr, 2, 3);
print_r($arrSpli);
echo "<br>";
print_r($arr);
echo "<br><br>";

$arr = [1, 2, 3, 4, 5, 6];
print_r($arr);
$arrSpli = array_splice($arr, 1, -2);
echo "<br>";
print_r($arrSpli);
echo "<br>";
print_r($arr);
echo "<br><br>";