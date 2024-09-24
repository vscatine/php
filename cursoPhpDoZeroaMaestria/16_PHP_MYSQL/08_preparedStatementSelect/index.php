<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);

    $beg = 5;
    $end = 15;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id BETWEEN ? AND ?");
    $stmt->bind_param("ii", $beg, $end);
    $stmt->execute();

    $getItens = $stmt->get_result();
    print_r($getItens);
    echo "<br>";
    $dataItens = $getItens->fetch_all();
    foreach($dataItens as $item) {
        print_r($item);
        echo "<br>";
    }

    $conn->close();
?>