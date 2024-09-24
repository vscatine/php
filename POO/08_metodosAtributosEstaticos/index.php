<?php
class Login {
    public static $user;

    public static function logar() {
        echo "O usuário " . self::$user . " está logado. <br>";
    }

    public function deslogar() {
        echo "O usuáio " . self::$user . " saiu do sistema. <br>";
    }
}

Login::$user = "Marcos";
echo Login::$user;
echo "<br>";
Login::logar();

$login = new Login;
$login->deslogar();

Login::$user = "Tamara";
Login::logar();
$login->deslogar();