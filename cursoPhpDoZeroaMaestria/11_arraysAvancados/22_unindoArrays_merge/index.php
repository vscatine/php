<?php
$arr1 = [1, 6, 9];
$arr2 = range(0.3, 0.45, 0.01);
$arr3 = [true, "texto qualquer"];
$arr4 = [
    "pessoa" => "vitor",
    "atividade" => "estudando PHP"
];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, ["outro array", 66.6]);
print_r($arrMerge);