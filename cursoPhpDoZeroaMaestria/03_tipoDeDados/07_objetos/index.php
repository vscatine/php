<?php
    class Pessoa {
        function falar() {
            echo "Olá, pessoal!";
        }
    }

    $p1 = new Pessoa();
    $p1->nome = "Vitor";

    echo $p1->nome;
    echo " diz: ";
    echo "<br>";
    echo $p1->falar();
    echo "<br>";

    echo "<br>";

    $p2 = new Pessoa();
    $p2->nome = "Gabriela";

    echo $p2->nome;
    echo "<br>";
    echo " diz: ";
    echo $p2->falar();
?>