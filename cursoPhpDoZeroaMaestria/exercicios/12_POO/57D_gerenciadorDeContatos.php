<?php
// Crie uma classe chamada Contact que represente um contato.
// A classe Contact deve ter os seguintes atributos:
//     name: nome do contato.
//     email: endereço de e-mail do contato.
//     phone: número de telefone do contato.
// A classe Contact deve ter os seguintes métodos:
//     getName(): retorna o nome do contato.
//     getEmail(): retorna o endereço de e-mail do contato.
//     getPhone(): retorna o número de telefone do contato.
//     setEmail($email): atualiza o endereço de e-mail do contato.
//     setPhone($phone): atualiza o número de telefone do contato.

class Contact {
    private $name;
    private $email;
    private $phone;

    public function GetName() {
        return $this->name;
    }

    public function GetEmail() {
        return $this->email;
    }

    public function GetPhone() {
        return $this->phone;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}

$vitor = new Contact;
$vitor->setName("Vitor");
$vitor->setEmail("vitor@gmail.com");
$vitor->setPhone("11985968574");

echo $vitor->getName();
echo "<br>";
echo $vitor->getEmail();
echo "<br>";
echo $vitor->getPhone();
echo "<br>";