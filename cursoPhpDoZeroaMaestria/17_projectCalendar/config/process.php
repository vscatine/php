<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;
// INSERÇÃO DE DADOS
if (!empty($data)) {

    if ($data["type"] === "create") {
        echo "Cadastrando novo contato";
        $name = $data["name"];
        $phone = $data["phone"];
        $obs = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :obs)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":obs", $obs);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato cadastrado com sucesso!";

        } catch(PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    } else if($data["type"] === "edit") {
        $id = $data["id"];
        $name = $data["name"];
        $phone = $data["phone"];
        $obs = $data["observations"];

        $query = "UPDATE contacts
                    SET name = :name, phone = :phone, observations = :obs
                    WHERE id = :id";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":obs", $obs);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";

        } catch(PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    } else if($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id= :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato excluído com sucesso!";

        } catch(PDOException $e) {
            //erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    }

    // Redirect Home
    header("Location:" . $BASE_URL . "../index.php");

// SELEÇÃO DE DADOS
} else {
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    
    //Retorna apenas um contato
    if (!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    
        $contact = $stmt->fetch();
    
    } else {
        //Retorna todos os contatos
        $contacts = [];
    
        $query = "SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    
        $contacts = $stmt->fetchAll();
    }
    
}

// FECHAR CONEXÃO
$conn = null;
