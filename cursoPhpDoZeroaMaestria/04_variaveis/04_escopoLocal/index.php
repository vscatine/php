<?php
    $x = 13;
    function Teste() {
        $x = 128;
        echo "$x local <br>";
    }

    echo "$x global <br>";
    Teste();
    echo "<br>";

    $x = 89;
    function Testando() {
        $x = 7;
        echo "$x local 2 <br>";
    }

    echo "$x global <br>";
    Testando();
    echo "<br>";
?>