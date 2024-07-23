<?php
$arr = range(10, 50);
print_r($arr);
echo "<br><br>";

$arrC = array_chunk($arr, 5);
var_dump($arrC);
echo "<br>";