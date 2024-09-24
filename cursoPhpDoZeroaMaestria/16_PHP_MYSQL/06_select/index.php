<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);

    $q = "SELECT * FROM itens";
    $result = $conn->query($q);
    $conn->close();

    // Mostrando apenas um (primeiro) resultado
    $item = $result->fetch_assoc();
    print_r($item);

    echo "<br><br>";

    //Mostrando todos os resultados
    $itens = $result->fetch_all();
    print_r($itens);

    $conn->close();

?>