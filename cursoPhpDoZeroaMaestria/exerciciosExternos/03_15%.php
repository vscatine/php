<?php
// 3 – Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor.

function calculaDesconto($valor, $porcentagem) {
    if (!is_numeric($valor) || !is_numeric($porcentagem)) {
        return "Essa função aceita apenas valores numéricos. <br>";
    }  else if ($porcentagem <= 0 || $porcentagem > 100) {   
        return "Porcentagem de desconto deve ser maior do que 0% e menor do que 100%. <br>";
    } else {
        $valFim = $valor - ($valor * ($porcentagem / 100));
        return $valFim;
    }
}

$val = 100;
$desc = 25;
$valTot = calculaDesconto($val, $desc);
echo $valTot . "<br>";

echo calculaDesconto(20, "texto");

echo calculaDesconto(1500.98, 0);

echo calculaDesconto(2800.65, 15) . "<br>";