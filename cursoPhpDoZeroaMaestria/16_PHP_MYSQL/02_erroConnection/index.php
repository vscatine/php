<?php
    $host = 'localhost';
    $usr = 'root';
    $pass = 'password';
    $dataBase = 'cursoph0p';

    $conn = new mysqli($host, $usr, $pass, $dataBase);

    // POO
    if ($conn->connect_errno) {
        echo "Erro na conexão! <br>";
        echo "Erro: " . $conn->connect_error;
    }

    // PROCEDURAL
    if ($conn->connect_errno) {
        echo "Erro na conexão! <br>";
        echo "Erro: " . mysqli_connect_error();
    }
?>