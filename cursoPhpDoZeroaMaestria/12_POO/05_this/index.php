<?php
class Cachorro {
    public $nome;
    
    function setName($name) {
        $this->nome = $name;
    }

    function bark() {
        return "au au au <br>";
    }

    function strongBark() {
        return strtoupper($this->bark());
    }
    
}

$pet1 = new Cachorro;
echo $pet1->nome . "<br>";

$pet1->setName("sombra");
echo $pet1->nome . "<br>";

echo $pet1->bark();
echo $pet1->strongBark();

