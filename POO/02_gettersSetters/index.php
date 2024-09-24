<?php
 
 class Login {
    private $email;
    private $password;

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

    public function signIn() {
        if($this->email == "teste@teste.com.br" && $this->password == "123456") {
            return "Succesfully signed in!";
        } else {
            return "Error: Something's wrong :( please check your email or password and try again.";
        }
    }
 }

 $userLog = new Login;
 $userLog->setEmail("teste@teste.com.br");
 $userLog->setPassword("123456");
 echo $userLog->signIn();
 echo "<br>";
 echo $userLog->getEmail();

 echo "<br><br>";

 $userLog02 = new Login;
 $userLog02->setEmail("vitor\()ç@teste(.)com");
 $userLog02->setPassword("123456");
 echo $userLog02->signIn();
 echo "<br>";
 echo $userLog02->getEmail();