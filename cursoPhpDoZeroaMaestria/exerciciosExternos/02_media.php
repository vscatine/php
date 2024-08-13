<?php
// 2 – Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado

function media($arrNums) {
    $soma = 0;
    $countNotNums = 0;

    foreach($arrNums as $num) {
        if (!is_numeric($num)) {
            return "<b>$num</b> não é um número - Essa função só aceita valores numéricos.<br>";
            $countNotNums ++;
            break;
        } else {
            $soma += $num;
        }
    }

    if ($countNotNums === 0) {
        $media = $soma / count($arrNums);
        return $media;
    }
}

$nums = [1, 5, 9];
$calc = media($nums);
echo $calc . "<br>";

$nums = [3, 5, 26.5, 58];
$calc = media($nums);
echo $calc . "<br>";
