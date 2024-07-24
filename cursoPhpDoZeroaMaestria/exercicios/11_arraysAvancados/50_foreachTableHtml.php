<?php
$pessoas = [
    "vitor" => 30,
    "gabriela" => 29,
    "cristiane" => 56,
    "eike" => 17,
    "ari" => 50
];
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade ?></td>
        </tr>
    <?php endforeach; ?>

</table>