<?php
class Pessoa {
    public $idade;

    public function __clone()
    {
        echo "Clonando - Idade: " . $this->idade . "<br>";
    }
}
echo "<h2>Pessoa 01 </h2>";
$pessoa = new Pessoa;
$pessoa->idade = 29;
echo "Pessoa 01: " . $pessoa->idade . "<br>";

echo "<h2>Pessoa 02 - Reference</h2>";
$pessoa2 = $pessoa;
$pessoa2->idade = "55";
echo "Pessoa 01: " . $pessoa->idade . "<br>";
echo "Pessoa 02: " . $pessoa2->idade . "<br>";

echo "<h2>Pessoa 03 - Clone </h2>";
$pessoa3 = clone $pessoa2;
$pessoa3->idade = 113;
echo "Pessoa 01: " . $pessoa->idade . "<br>";
echo "Pessoa 02: " . $pessoa2->idade . "<br>";
echo "Pessoa 03: " . $pessoa3->idade;
