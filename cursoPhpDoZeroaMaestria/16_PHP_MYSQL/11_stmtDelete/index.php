<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);

    $id = 18;

    $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $conn->close();
?>