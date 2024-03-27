<?php 
    echo true;
    echo "<br>";
    echo false;

    if (is_bool(true) && is_bool(false)) {
        echo "É booleano. <br>";
    }

    if (is_bool(1)) {
        echo "É booleano.";
    } else {
        echo "Não é booleano 2.";
    }

    
?>