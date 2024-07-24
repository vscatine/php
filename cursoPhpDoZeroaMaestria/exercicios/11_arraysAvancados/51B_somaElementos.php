<?php
function somaElementos($arrNums) {
    if (!is_array($arrNums)) {
        return "$arrNums não é um array! Essa função só aceita arrays.";
    } else {
        $arrSum = 0;
        $countNotNumber = 0;
        foreach ($arrNums as $item) {
            if (!is_numeric($item)) {
                $countNotNumber ++;
                break;
            } else {
                $arrSum += $item;
            }
        }

        if ($countNotNumber > 0 ) {
            return "O array deve conter apenas valores numéricos!";
        } else {
            return $arrSum;
        }
    }
}

$arr = range(1, 5);
$soma = somaElementos($arr);
echo $soma . "<br>";

$arr = "texto";
$soma = somaElementos($arr);
echo $soma . "<br>";

$arr = [1, 2, 3, 4, "texto"];
$soma = somaElementos($arr);
echo $soma . "<br>";

$arr = [1, 2, 3, 4, "texto", 6, 8];
$soma = somaElementos($arr);
echo $soma . "<br>";

$arr = [0.55, 99, 12.85, 100];
$soma = somaElementos($arr);
echo $soma . "<br>";