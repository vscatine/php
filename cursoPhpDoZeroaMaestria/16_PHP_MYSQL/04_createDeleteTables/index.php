<?php
    $host = 'localhost';
    $usr = 'root';
    $pass = 'password';
    $db = 'cursophp';

    $conn = new mysqli($host, $usr, $pass, $db);

    // $create = 'CREATE TABLE tabelanophp (nome VARCHAR(50), email VARCHAR(100))';
    // $conn->query($create);
    // $conn->close();
    // echo 'Tabela criada!<br>';

    $drop = 'DROP TABLE tabelanophp';
    $conn->query($drop);
    $conn->close();
    echo 'Tabela deletada! <br>';

?>