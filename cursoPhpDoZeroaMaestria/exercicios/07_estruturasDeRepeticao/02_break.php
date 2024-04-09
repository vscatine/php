<?php
    $c = 4;

    while ($c <= 30) {
        echo $c . "<br>";
        if ($c === 24) {
            echo "Finalizando o loop no 24.";
            break;
        }
        $c += 2;
    }   
?>