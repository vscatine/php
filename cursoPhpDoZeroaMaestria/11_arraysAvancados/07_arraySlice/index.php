<?php
$arr = [2, 4, 6, 8, 10, 12, 14, 16];

$arrDiv = array_slice($arr, 2, 4);
print_r($arrDiv);
echo "<br><br>";

$arrDiv = array_slice($arr, 1, 4);
print_r($arrDiv);
echo "<br><br>";

$arrDiv = array_slice($arr, 2);
print_r($arrDiv);
echo "<br><br>";

$arrDiv = array_slice($arr, 2, -3);
print_r($arrDiv);
echo "<br><br>";