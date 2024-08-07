<?php
print_r($_GET);
$nome = $_GET['name'];
$email = $_GET['email'];
?>

<h3>Olá, <?= $nome?>!</h3>
<p><b>Logado com:</b> <?= $email ?></p>