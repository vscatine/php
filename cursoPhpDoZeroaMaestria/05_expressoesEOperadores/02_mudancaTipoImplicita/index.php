<?php
    $br = '<br>';
    // inteiros virando float
    $ints = 5/2;
    echo $ints . $br;
    
    if (is_float($ints)) {
        echo $ints . " " . " é um float." . $br;
    }

    $stints = 2 . 3;
    echo $stints . $br;

    if (is_string($stints)) {
        echo $stints . " é uma string por concatenação.";
    }

?>