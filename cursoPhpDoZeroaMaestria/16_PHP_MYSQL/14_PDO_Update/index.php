<?php
    include_once("../helpers/connParam.php");
    $conn = new PDO("mysql:host=$host;dbname=$db", $usr, $pass);

    $id = 15;
    $nome = "Colgate total 12";
    $descricao = "Creme dental colgate total 12 90g";

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
?>