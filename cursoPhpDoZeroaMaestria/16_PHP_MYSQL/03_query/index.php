<?php
    $host = 'localhost';
    $usr = 'root';
    $pass = 'password';
    $db = 'cursophp';

    $conn = new mysqli($host, $usr, $pass, $db);

    // QUERY
    $sql = "SELECT * FROM itens";
    $result = $conn->query($sql);
    print_r($result);
    echo "<br>";
    var_dump($result);
    echo "<br>";

    foreach ($result as $r) {
        var_dump($r);
        echo "<br>";
    }
    $conn->close();
?>