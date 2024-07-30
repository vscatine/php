<?php
class Pessoa {
    public $nome;
    public $idade;

    function andar($distancia) {
        echo "Essa pessoa andou $distancia metros. <br>";
    }
}

$pessoa = new Pessoa;
$pessoa->nome = "Vitor";
$pessoa->idade = 29;

echo $pessoa->nome;
echo "<br>";
echo $pessoa->idade;
echo "<br>";
$pessoa->andar(100);
