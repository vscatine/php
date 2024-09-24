<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);
    
    $id = 7;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $res = $stmt->get_result();
    $resData = $res->fetch_row();
    print_r($resData);
    $conn->close();
?>