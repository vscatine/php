<?php
    include_once("../helpers/connParam.php");
    $conn = new PDO("mysql:host=$host;dbname=$db", $usr, $pass);
    
    $nome = "Listerine";
    $desc = "Enxaguante bucal Listerine menta 500ml";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nm, :de)");

    $stmt->bindParam(":nm", $nome);
    $stmt->bindParam(":de", $desc);
    $stmt->execute();

?>