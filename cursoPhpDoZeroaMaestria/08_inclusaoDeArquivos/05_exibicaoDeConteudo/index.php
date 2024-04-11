<?php 
    $nome = "Vitor";
?>

<form action="#">
    <!--Não guarda valores, apenas mostra na tela-->
    <?= $teste = "qualquer coisa"?>
    <div>
        <label for="nome">Nome</label>
        <input type="text" id= "nome" value="<?= $nome?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>