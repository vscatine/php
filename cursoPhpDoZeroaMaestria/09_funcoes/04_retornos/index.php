<?php
    function sumReturn ($n1, $n2) {
        if (!is_numeric($n1) || !is_numeric($n2)) {
            return "Os valores devem ser númericos! <br>";
        } else {
            return $n1 + $n2;
        }
    }
    
    echo sumReturn(3 , 2.5) . "<br>";
    echo sumReturn(3 , true);
    echo sumReturn("", 2.5);
    
    $x = sumReturn(5, 6);
    echo $x . "<br>";

    $y = sumReturn($x, 33.45);
    echo $y;
