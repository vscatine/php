<?php
    $a =10;
    while ($a > 0){
        if ($a == 5 || $a == 7) {
            $a--;
            continue;
        }
        echo "Executando o loop $a <br>";
        $a--;
    }