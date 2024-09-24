<?php

class User {
    private $name;
    private $email;
    private $password;

    public function __construct($n, $e, $p) {
        $this->setName($n);
        $this->setEmail($e);
        $this->setPassword($p);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($n) {
        $this->name = $n;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $emailClean = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $emailClean;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($p) {
        $this->password = $p;
    }
}

$vitor = new User("Vitor", "vitor()@(teste(.com>", "123456");
echo $vitor->getName() . "<br>";
echo $vitor->getEmail() . "<br>";
echo $vitor->getPassword() . "<br>";