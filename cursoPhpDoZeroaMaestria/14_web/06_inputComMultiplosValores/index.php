<?php
    if(isset($_POST['adicionais'])) {
        print_r($_POST['adicionais']);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs com múltiplos valores</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div class="checkGroup">
            <div>
                <input type="checkbox" name="adicionais[]" value="bacon"> bacon
            </div>
            <div>
                <input type="checkbox" name="adicionais[]" value="queijo"> queijo
            </div>
            <div>
                <input type="checkbox" name="adicionais[]" value="hamburguer"> hamburguer
            </div>
            <div>
                <input type="checkbox" name="adicionais[]" value="alface"> alface
            </div>
            <div>
                <input type="checkbox" name="adicionais[]" value="tomate"> tomate
            </div>
            <div>
                <input type="checkbox" name="adicionais[]" value="cebola"> cebola
            </div>
        </div>
        <div>
            <input type="submit" value="Finalizar">
        </div>
    </form>
</body>
</html>