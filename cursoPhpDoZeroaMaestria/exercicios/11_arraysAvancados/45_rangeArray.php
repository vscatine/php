<?php
$arr = range(10, 45);
foreach($arr as $item) {
    $soma = $item + 6;
    if ($soma > 30) {
        echo "$soma => Número muito alto! <br>";
    } else {
        echo "$soma <br>";
    }
}