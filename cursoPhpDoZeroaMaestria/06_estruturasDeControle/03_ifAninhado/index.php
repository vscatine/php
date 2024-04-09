<?php
    if (5 > 2) {
        echo "Primeiro if. <br>";

        if ("teste" === "teste") {
            echo "Segundo if (aninhado). <br>";

            if (150 < 12) {
                echo "Terceiro if (aninhado). <br>";
            } else {
                echo "Else dentro do segundo if aninhado. <br>";
            }
        }
    }
    
?>