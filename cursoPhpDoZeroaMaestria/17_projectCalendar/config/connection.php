<?php
    $host = '127.0.0.1';
    $usr = 'root';
    $pass = 'password';
    $db = 'agenda';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $usr, $pass);
        //Activating Error Mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        //erro na conexão com o banco de dados
        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>