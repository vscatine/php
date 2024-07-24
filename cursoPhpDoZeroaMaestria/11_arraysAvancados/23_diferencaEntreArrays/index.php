<?php
$arr1 = [1, 2, 3];
$arr2 = [2, 4, 5];
$arr3 = [4, 5];

$dif1 = array_diff($arr1, $arr2);
print_r($dif1);
echo "<br>";

$dif2 = array_diff($arr2, $arr1);
print_r($dif2);
echo "<br>";

$dif3 = array_diff($arr2, $arr1, $arr3);
print_r($dif3);
echo "<br>";