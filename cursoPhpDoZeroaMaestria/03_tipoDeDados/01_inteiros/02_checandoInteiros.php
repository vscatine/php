<?php
    $msgTrue = "É um inteiro";
    $msgFalse = "Não é um inteiro";
    $a = 5;
    $a = "string";

    if(is_int($a)) {
        echo $msgTrue;
    } else {
        echo $msgFalse;
    }
?>