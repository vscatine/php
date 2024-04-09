<?php
    $c = 0;

    while ($c <= 10) {
        echo $c . "<br>";
        if ($c == 7) {
            echo "Finalizando o loop.";
            break;
        }
        $c++;
    }
?>