<?php
// 6 – Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.

function msTokmh ($velMs) {
    if (!is_numeric($velMs)) {
        return false;
    } else {
        $velKm = $velMs * 3.6;
        return $velKm;
    }
}

echo msTokmh(25) . " km/h <br>";