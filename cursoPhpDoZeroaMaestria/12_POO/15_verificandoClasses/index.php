<?php

class Pessoa {
    public $nome;
    public $idade;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = $n;
    }
}

//Verificando se uma classe existe
if (class_exists("Pessoa")) {
    echo "A classe Pessoa existe. <br>";
} else {
    echo "A classe Pessoa NÃO existe. <br>";
}

if (class_exists("Outra")) {
    echo "A classe Outra existe <br>";
} else {
    echo "A classe Outra NÃO existe. <br>";
}

//mostrando os atributos("Variáveis") da classe como array
print_r(get_class_vars("Pessoa"));
echo "<br>";

//mostrando os atributos("Variáveis") da classe como array, após instaciar
$vitor = new Pessoa;
$vitor->setNome("Vitor");
$vitor->idade = 29;
print_r(get_class_vars("Pessoa"));
echo "<br>";
//Nada acontece de diferente.

//mostrando os métodos (funções) da classe como array
print_r(get_class_methods("Pessoa"));

