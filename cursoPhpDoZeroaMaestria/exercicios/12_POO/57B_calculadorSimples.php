<?php
// Crie uma classe chamada Calculadora que tenha os seguintes métodos:
// somar(a, b): recebe dois números como parâmetros e retorna a soma deles.
// subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.
// multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.
// dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.

class Calculadora {
    public function somar($a, $b) {
        return ($a + $b);
    }

    public function subtrair($a, $b) {
        return ($a - $b);
    }

    public function multiplicar($a, $b) {
        return ($a * $b);
    }

    public function dividir($a, $b) {
        if ($b == 0) {
            return "Erro! Impossível dividir por zero.";
        } else {
            return ($a / $b);
        }
    }
}

$calc = new Calculadora;

echo $calc->somar(0.03, 98);
echo "<br>";

echo $calc->subtrair(-7, -8.6);
echo "<br>";

echo $calc->multiplicar(8, 5);
echo "<br>";

echo $calc->dividir(5, 0.00);
echo "<br>";

echo $calc->dividir(25, 5);
echo "<br>";



