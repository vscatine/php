<?php
$method = $_SERVER['REQUEST_METHOD'];

if(isset($_POST['nome'])) {
    $nome = $_POST['nome'];
} else {
    $nome = "usuário";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-processamento</title>
</head>
<body>
    <?php
        if ($method == 'GET'):
    ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="submit" value="Enivar">
        </div>
    </form>
    <?php
        else:
    ?>
        <h3>Olá, <?= $nome ?>!</h3>
    <?php
        endif;
    ?>
</body>
</html>