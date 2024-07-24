<?php
function encontrarPares($arrInts) {
    if (!is_array($arrInts)) {
        return ["erro" => "$arrInts não é um array! Essa função aceita apenas arrays."];
    } else {
        $countNotInts = 0;
        $arrEven = [];
        foreach ($arrInts as $item) {
            if (!is_int($item)) {
                $countNotInts ++;
                break;
            } else {
                if ($item % 2 === 0 && $item != 0) {
                    $arrEven[] = $item;
                }
            }
        }

        if ($countNotInts > 0) {
            return ["erro" => "O array deve conter apenas números inteiros!"];
        } else {
            return $arrEven;
        }
    }
}

$arr = range(1, 10);
$pares = encontrarPares($arr);
print_r($pares);
echo "<br>";

$arr = "uma string";
$pares = encontrarPares($arr);
print_r($pares);
echo "<br>";

$arr = range(1, 10);
$arr[] = 0.66;
$arr[] = 103;
$pares = encontrarPares($arr);
print_r($pares);
echo "<br>";

$arr = [3, 5, 7, 9, 11];
$pares = encontrarPares($arr);
print_r($pares);
echo "<br>";

$arr = range(0, 35);
$pares = encontrarPares($arr);
print_r($pares);
echo "<br>";