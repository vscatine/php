<?php
// Crie uma classe chamada Passenger que represente um passageiro.
// A classe Passenger deve ter os seguintes atributos:
//     name: nome do passageiro.
//     age: idade do passageiro.
//     seatNumber: número do assento do passageiro.
// A classe Passenger deve ter os seguintes métodos:
//     getName(): retorna o nome do passageiro.
//     getAge(): retorna a idade do passageiro.
//     getSeatNumber(): retorna o número do assento do passageiro.
//     setSeatNumber($seatNumber): atualiza o número do assento do passageiro.

class Passenger {
    private $name;
    private $age;
    private $seatNumber;

    public function __construct($name, $age, $seatNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSeatNumber() {
        return $this->seatNumber;
    }

    public function setSeatNumber($seatNumber) {
        $this->seatNumber = $seatNumber;
    }
}

$traveller = new Passenger("Vitor", 29, "33C");
echo $traveller->getName();
echo "<br>";
echo $traveller->getAge();
echo "<br>";
echo $traveller->getSeatNumber();
echo "<br>";

echo "<h3>Changing Seat Number</h3>";
$traveller->setSeatNumber("10A");
echo $traveller->getName();
echo "<br>";
echo $traveller->getAge();
echo "<br>";
echo $traveller->getSeatNumber();
echo "<br>";
