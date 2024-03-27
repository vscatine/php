<?php
    echo "Testando Strings. <br>";

    $txt = "Vitor Scatine";
    $num = -95.7;

    if (is_string($txt));
        echo "$txt é uma string. <br>";

    if (is_string($num)) {
        echo "$num é uma string. <br>";
    } else {
        echo "$num não é uma uma string. <br>";
    }

?>