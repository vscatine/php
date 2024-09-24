<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);

    $nome = "Simeticona";
    $descricao = "Medicamento para gases";
    $id = 7;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nome, $descricao, $id);
    $stmt->execute();

    if($stmt->error) {
        echo "Erro: " . $stmt->errno . " - " . $stmt->error;
    }

    $conn->close();
?>