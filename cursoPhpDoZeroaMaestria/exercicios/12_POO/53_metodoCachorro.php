<?php
class Cachorro {
    function latir() {
        echo "Au au au au <br>";
    }
    
    function andar() {
        echo "Estou andando. <br>";
    }
}

$pet1 = new Cachorro;
$pet2 = new Cachorro;

$pet1->latir();
$pet1->andar();

$pet2->latir();
$pet2->andar(); 