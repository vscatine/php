<?php
interface Caracteristicas {
    //Só aceita constantes e não propriedades.
    //public $idade;
    public const IDADE = 17;

    //Ao implementar um método na interface, é obrigatorio implementa-lo também na class.
    public function falarNome();
}

class Pessoa implements Caracteristicas {
    public $nome = "Vitor";

    public function falarNome()
    {
        echo "Meu nome é $this->nome.";
    }
}

$francisco = new Pessoa;
$francisco->falarNome();
echo "<br>";

$francisco->nome = "Francisco";
$francisco->falarNome();
echo "<br>";

echo $francisco::IDADE;
echo "<br>";

//Não é possível alterar o valor de uma constante. Um Erro irá ocorrer ao descomentar a linha abaixo.
//$francisco::IDADE = 25;