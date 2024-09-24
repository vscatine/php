<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);
    $id = 18;
    $nome = "Melagrião";
    $desc = "Xarope expectorante para tosse.";

    $stmt = $conn->prepare("INSERT INTO itens (id, nome) VALUES (?, ?)");
    $stmt->bind_param("is", $id, $nome); // s = sting, i = integer, d= double
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $desc);
    $stmt->execute();

    $conn->close();
?>