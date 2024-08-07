<?php
print_r($_POST);
$nome = $_POST['name'];
$email = $_POST['email'];
?>

<h3>Olá, <?= $nome?>!</h3>
<p><b>Logado com:</b> <?= $email ?></p>