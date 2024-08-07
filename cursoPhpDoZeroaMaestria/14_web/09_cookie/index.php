<?php
    setcookie("nome", "Vitor", time() + 3600);
    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    } else {
        $nome = "Usuário";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Página Index</h2>
    <div>
        <?php if($nome != ''): ?>
            <h3>Olá, <?= $nome ?>!</h3>
        <?php endif; ?>
    </div>
    <div>
        <a href="pagina01.php">Próxima página</a>
    </div>

</body>
</html>