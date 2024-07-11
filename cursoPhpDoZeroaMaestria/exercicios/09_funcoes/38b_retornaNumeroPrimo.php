<?php
    function isPrime($n) {
        $contador = 0;
        $divisores = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i === 0) {
                $contador++;
                array_push($divisores, $i);
            }
        }

        if ($contador === 2) {
            echo "$n É primo, pois é divisível por: <br><ul><li>1</li><li>$n</li></ul>";
        } else {
            echo "$n NÃO é primo, pois é divísivel por $contador números. São eles: <br>";
            echo "<ul>";
            foreach($divisores as $div) {
                echo "<li>$div</li>";
            }
            echo "</ul>";
        }
    }

    echo isPrime(571);