<?php
// 7 – Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário.

function calcIMC ($peso, $altura) {
    if (!is_numeric($peso) || !is_numeric($altura)) {
        return false;
    } else {
        $imc = $peso / ($altura ** 2);
        return $imc;
    }
}

function defineIMC($imc) {
    $defIMC = "";
    if (!is_numeric($imc)) {
        return false;
    } else {
        if ($imc < 16.9) {
            $defIMC = "muito abaixo do peso.";
        } else if ($imc >= 17 && $imc < 18.5) {
            $defIMC = "abaixo do peso.";
        } else if ($imc >= 18.5 && $imc < 25) {
            $defIMC = "peso normal.";
        } else if ($imc >= 25 && $imc < 30) {
            $defIMC = "acima do peso.";
        } else if ($imc >= 30 && $imc < 35) {
            $defIMC = "obesidade grau I.";
        } else if ($imc >= 35 && $imc < 40) {
            $defIMC = "obesidade grau II";
        } else {
            $defIMC = "obesidade grau III.";
        }
    }
    return $defIMC;
}

$imc = calcIMC(41.6, 1.5);
$defImc = defineIMC($imc);
echo "IMC: $imc <br>";
echo "Definição: $defImc <br>";