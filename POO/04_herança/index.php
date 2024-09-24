<?php

class Vehicle {
    public $brand;
    public $model;
    public $year;
    public $color;
    
    public function __construct($brand, $model, $year, $color) {
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setYear($year);
        $this->setColor($color);
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($b) {
        $this->brand = $b;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($m) {
        $this->model = $m;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($y) {
        $this->year = $y;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($c) {
        $this->color = $c;
    }

    public function move() {
        $vhcDescript = $this->getColor() . " " . $this->getBrand() . " " . $this->getModel();
        return "The $vhcDescript is moving.";
    }

    public function stop() {
        $vhcDescript = $this->getColor() . " " . $this->getBrand() . " " . $this->getModel();
        return "The $vhcDescript has stopped.";
    }
}

class Car extends Vehicle {
    public function windshieldWipersON() {
        $vhcDescript = $this->getColor() . " " . $this->getBrand() . " " . $this->getModel();
        return "$vhcDescript: Windshield wipers <font color=" .'"#46eb34"' . ">ON</font>.";
    }

    public function windshieldWipersOFF() {
        $vhcDescript = $this->getColor() . " " . $this->getBrand() . " " . $this->getModel();
        return "$vhcDescript: Windshield wipers <font color=" .'"red"' . ">OFF</font>.";
    }
}

class Motorcycle extends Vehicle {
    public function doAWheelie() {
        $vhcDescript = $this->getColor() . " " . $this->getBrand() . " " . $this->getModel();
        return "BE CAREFULL! You're riding your $vhcDescript in only one wheel!";
    }
}

$celta = new Car("chevrolet", "Celta", "2007", "Blue");
echo $celta->move() . "<br>";
echo $celta->windshieldWipersON() . "<br>";
echo $celta->stop() . "<br>";
echo $celta->windshieldWipersOFF() . "<br>";

$biz = new Motorcycle("Honda", "Biz", "2010", "Red");
echo $biz->doAWheelie() . "<br>";