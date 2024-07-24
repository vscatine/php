<?php
$arr = [1, 2, 4, 6, 8, 10, 12, 14, 16];

function soma($a, $b) {
    return $a +$b;
}

$res = array_reduce($arr, "soma");
echo "$res <br>";