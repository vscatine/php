<?php
    $a = 39.5;
    $b = "qualquer";
    
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    if (is_float($a)) {
        echo "É um float.";
        echo "<br>";
    }

    if (is_float($b)) {
        echo "É um float.";
        echo '<br>';
    } else {
        echo "Não é um float.";
        echo "<br>";
    }
?>