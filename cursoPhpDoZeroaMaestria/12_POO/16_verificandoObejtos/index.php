<?php
class Pessoa {
    public function falar() {
        return "Olá, mundo!";
    }
}

$vitor = new Pessoa;
$teste = "";
//Verificando se é um obejto
if (is_object($vitor)) {
    echo "É um objeto. ";
    //Retorna a classe de um objeto
    echo "E pertence a classe " . get_class($vitor) . "<br>";
} else {
    echo "Não é um objeto. <br>";
}

if (is_object($teste)) {
    echo "É um objeto. ";
    echo "E pertence a classe " . get_class($teste) . "<br>";
} else {
    echo "Não é um objeto. <br>";
}

//Verificar se um método existe na classe
if (method_exists($vitor, "falar")) {
    echo "Esse método existe. <br>";
} else {
    echo "Esse método NÃO existe. <br>";
}

if (method_exists($vitor, "andar")) {
    echo "Esse método existe. <br>";
} else {
    echo "Esse método NÃO existe. <br>";
}