<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários com GET</title>
</head>

<body>
    <h3>Inscrição com GET</h3>
    <form action="processamento.php" method="GET">
        <div>
            <div><label for="name">Nome</label></div>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <div><label for="email">Email</label></div>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>