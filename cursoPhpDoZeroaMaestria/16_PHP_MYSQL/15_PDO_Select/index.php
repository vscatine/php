<?php
    include_once("../helpers/connParam.php");
    $conn = new PDO("mysql:host=$host;dbname=$db", $usr, $pass);
    
    $param = "%indicado%";
    
    $stmt = $conn->prepare("SELECT * FROM itens WHERE descricao LIKE :parameter");
    $stmt->bindParam(":parameter", $param);
    $stmt->execute();

    $resSingle = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($resSingle);
    echo "<br>";

    $resAll = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($resAll as $item) {
        print_r($item);
        echo "<br>";
    }   

?>