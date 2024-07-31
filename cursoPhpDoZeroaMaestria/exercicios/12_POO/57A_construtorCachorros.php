<?php
class Cachorro {
    public $nome;
    public $raca;
    public $sexo;
    
    public function __construct($n, $r, $s)
    {
        $this->nome = $n;
        $this->raca = $r;
        $this->sexo = $s;
    }

    public function getDadosCachorro() {
        return "Nome: $this->nome<br>Raça: $this->raca<br>Sexo: $this->sexo<br>";
    }

}

$fofinha = new Cachorro("Fofinha", "Pooddle", "Fêmea");
echo $fofinha->getDadosCachorro();

$tobias = new Cachorro("Tobias", "Buldog", "Masculino");
echo $tobias->getDadosCachorro();

