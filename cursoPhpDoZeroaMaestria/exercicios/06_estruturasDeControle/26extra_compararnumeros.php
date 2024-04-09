<?php
    function compararNumeros($x, $y) {
        if (is_numeric($x) && is_numeric($y)) {
            if ($x > $y) {
                return "$x é maior do que $y. <br>";
            } else if ($y > $x) {
                return "$x é menor do que $y. <br>";
            } else {
                return "$x = $y. <br>";
            }
        } else {
            return "Apenas números são aceitos.";
        }
    };

    echo compararNumeros(12, 12);
?>