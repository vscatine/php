<?php
    $str = "teste";
    $invert = strrev($str);
    echo $invert . "<br>";

    for ($c = (strlen($str) - 1); $c >= 0; $c--) {
        echo $str[$c] . "<br>";
    }