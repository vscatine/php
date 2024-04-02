<?php
    $teste = "Escopo Global.";
    echo "$teste <br>";

    $teste = "Alterando no global.";
    echo "$teste <br>";

    function ChangeGlob() {
        global $teste;
        $teste = "Variável global alterada dentro de uma function.";
        echo "Local - $teste <br>";
    }

    ChangeGlob();

    echo "Global - $teste <br>"
?>