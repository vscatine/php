<?php
    $user = [
       'nome' => "Vitor" ,
       'email' => 'vitor@gmail.com',
       'idade' => 29
    ];

    if ($user) {
        $nome = $user['nome'];
        $email = $user['email'];
        $idade = $user['idade'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchendo Formulários</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Qual o seu nome?" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="email" placeholder="Qual o seu email?" value="<?= $email ?>">
        </div>
        <div>
            <input type="number" min="1" max = "115" name="idade" placeholder="Qual a sua idade?" value="<?= $idade ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>