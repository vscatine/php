<?php
class User00 {
    public function newUser($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("O email é inválido.", 435);
            exit;
        }
        echo "Usuário cadastrado com sucesso!";
    }
}

echo "<h2>Usuário 01</h2>";
$usuario = new User00;
try {
    $usuario->newUser("vitor@");
} catch(Exception $e) {
    echo "<b>Code: </b>" . $e->getCode() . "<br>";
    echo "<b>Mesage: </b>" . $e->getMessage() . "<br>";
    echo "<b>File: </b>" . $e->getFile() . "<br>";
    echo "<b>Line: </b>" . $e->getLine() . "<br>";
}

echo "<h2>Usuário 02 </h2>";
$user2 = new User00;
try {
    $user2->newUser("vitor@gmail.com");
} catch(Exception $e) {
    echo "Code: " . $e->getCode() . "<br>";
    echo "Mesage: " . $e->getMessage() . "<br>";
    echo "File: " . $e->getFile() . "<br>";
    echo "Line: " . $e->getLine() . "<br>";
}
