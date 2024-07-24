<?php
$competidores = [
    "cristiane" => 9.7,
    "vitor" => 6.5,
    "gabriela" => 9.5,
    "joao" => 4.3,
    "ari" => 8.3,
    "eike" => 7.1,
    "tania" => 8,
    "jose" => 7.5,
    "milton" => 3.2
];
arsort($competidores);
?>
<h2>Ranking da competição</h2>
<ol>
    <?php foreach($competidores as $competidor => $nota): ?>
        <li><?= "$competidor: $nota" ?></li>
    <?php endforeach; ?>
</ol>