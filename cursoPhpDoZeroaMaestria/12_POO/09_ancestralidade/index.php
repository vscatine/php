<?php
class Pessoa {

}

class Professor  extends Pessoa{

}

class Animal {

}

class Gato extends Animal {

}

$pedro = new Professor;
$bolota = new Gato;

echo "<h2>Testando Pedro</h2>";

if ($pedro instanceof Pessoa) {
    echo "Pedro é uma Pessoa. <br>";
} else {
    echo "Pedro não é uma Pessoa. <br>";
}

if ($pedro instanceof Professor) {
    echo "Pedro é um Professor. <br>";
} else {
    echo "Pedro não é um Professor. <br>";
}

if ($pedro instanceof Animal) {
    echo "Pedro é um Animal. <br>";
} else {
    echo "Pedro não é um Animal. <br>";
}

if ($pedro instanceof Gato) {
    echo "Pedro é um Gato. <br>";
} else {
    echo "Pedro não é um Gato. <br>";
}

echo "<h2>Testando Bolota</h2>";

if ($bolota instanceof Pessoa) {
    echo "Bolota é uma Pessoa. <br>";
} else {
    echo "Bolota não é uma Pessoa. <br>";
}

if ($bolota instanceof Professor) {
    echo "Bolota é um Professor. <br>";
} else {
    echo "Bolota não é um Professor. <br>";
}

if ($bolota instanceof Animal) {
    echo "Bolota é um Animal. <br>";
} else {
    echo "Bolota não é um Animal. <br>";
}

if ($bolota instanceof Gato) {
    echo "Bolota é um Gato. <br>";
} else {
    echo "Bolota não é um Gato. <br>";
}