<?php
    $validacoes = [];

    if (count($_POST) > 0) {
        if ($_POST['nome'] == '') {
            $validacoes[] = "Por favor, preencha o nome.";
        } 
        
        if ($_POST['email'] == '') {
            $validacoes[] = "Por favor, preencha o email.";
        } 
        
        if ($_POST['senha'] == '') {
            $validacoes[] = "Por favor, preencha uma senha.";
        } else if ($_POST['confirmacao'] == '') {
            $validacoes[] = "Por favor, preencha a confirmação de senha.";
        } else if ($_POST['senha'] !== $_POST['confirmacao']) {
            $validacoes[] = "Senha e confirmação devem ser iguais.";
        }




    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulários</title>
</head>
<body>
    <?php if (count($validacoes)): ?>
    <ul>
        <?php foreach($validacoes as $validacao): ?>
            <li><?= $validacao ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <h3>Cadastro de usuário</h3>
    <form action="index.php" method="POST">
        <div><input type="text" name="nome" placeholder="Seu nome"></div>
        <div><input type="text" name="email" placeholder="Seu Email"></div>
        <div><input type="password" name="senha" placeholder="Senha"></div>
        <div><input type="password" name="confirmacao" placeholder="Confirme a Senha"></div>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>