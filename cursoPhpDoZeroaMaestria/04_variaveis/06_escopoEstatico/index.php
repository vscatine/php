<?php
    function Teste() {
        $a = 0;
        $a++;
        echo "$a <br>";
    }

    Teste();
    Teste();
    Teste();

    echo "<br> Agora com Static <br><br>";

    function TesteComStatic() {
        static $a = 0;
        $a++;
        echo "$a <br>";
    }

    TesteComStatic();
    TesteComStatic();
    TesteComStatic();
?>