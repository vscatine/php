<?php
function maiorElemento($arrNums) {
    if (!is_array($arrNums)) {
        return "$arrNums não é um array! Essa função aceita apenas arrays.";
    } else if (!is_numeric($arrNums[0])) {
        return "O array deve conter apenas valores numéricos!";
    } else {
        $countNotNumbers = 0;
        $high = $arrNums[0];
        foreach ($arrNums as $item) {
            if (!is_numeric($item)) {
                $countNotNumbers ++;
                break;
            } else {
                if ($item > $high) {
                    $high = $item;
                }
            }
        }

        if ($countNotNumbers > 0) {
            return "O array deve conter apenas valores numéricos!";
        } else {
            return $high;
        }
    }
}

$arr = range(1, 10);
$maior = maiorElemento($arr);
echo "$maior <br>";

$arr = true;
$maior = maiorElemento($arr);
echo "$maior <br>";

$arr = [5, 8, 10, 4, 150, 1, "texto", 0.3];
$maior = maiorElemento($arr);
echo "$maior <br>";

$arr = [15, 5, 78, 50, 104, 3, 12, 5, 8];
$maior = maiorElemento($arr);
echo "$maior <br>";