<?php
    function numSquare($n) {
        if (!is_numeric($n)) {
            return "Insira apenas valores númericos. <br>";
        } else {
            return $n ** 2;
        }
    }

    echo numSquare(5) . "<br>";
    echo numSquare(false);
    echo numSquare(2.5) . "<br>";
    
    $res = numSquare(10) . "<br>";
    echo $res;