<?php
// 4 – Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor.

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

echo calculaDesconto(150, 5) . "<br>";
echo calculaDesconto(150, 50) . "<br>";
