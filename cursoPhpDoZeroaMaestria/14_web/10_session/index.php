<?php
    session_start();

    print_r($_SESSION);

    $_SESSION['nome'] = 'Vitor';
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
    <a href="pag01.php">Pag 01</a>
</body>
</html>