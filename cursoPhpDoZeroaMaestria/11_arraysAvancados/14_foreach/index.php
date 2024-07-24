<?php
$pessoas = [
    [
        "nome" => "vitor",
        "idade" => 29
    ],

    [
        "nome" => "gabriela",
        "idade" => 28
    ]
];

foreach($pessoas as $id => $pessoa) {
    echo "<b>Pessoa de ID $id</b><br>";
    foreach($pessoas[$id] as $carac => $val) {
        echo "<b>$carac</b>: $val<br>";
    }
    echo "<br>";
}