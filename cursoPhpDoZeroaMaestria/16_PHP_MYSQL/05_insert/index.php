<?php
    include_once("../helpers/connParam.php");
    $conn = new mysqli($host, $usr, $pass, $db);
    
    $table = "itens";
    $nome = "Soro Fisiologico";
    $descricao = "Soro para aplicação interna e externa.";
    
    $insert = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($insert);

    $nome = "Desodorante Rexona";
    $descricao = "Rexona men 150ml";
    
    $insert = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($insert);
    $conn->close();

?>