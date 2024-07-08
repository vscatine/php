<?php
    echo "TESTE COM A<br>";
    
    $a = 15;
    function testeA () {
        $a = 98;
        $a ++;
        echo $a;
    }

    echo "A Global, fora da função: $a <br>";
    echo "A1 dentro da função: ";
    testeA();
    echo "<br>Chamando a função novamente: <br>";
    echo "A2 dentro da função: ";
    testeA();
    echo "<br>Chamando a função novamente: <br>";
    echo "A3 dentro da função: ";
    testeA();

    echo "<br><br>TESTE COM B<br>";

    $b = 30;
    function testeB() {
        global $b;
        $b++;
        echo "B dentro da função: $b";
    }

    echo "B fora da função: $b <br>";
    testeB();
    echo "<br>Chamando a função novamente: <br>";
    testeB();
    echo "<br> $b <br>";

    echo "<br>TESTE COM C<br>";
    $c = 7;
    function testeC() {
        static $c = 12;
        $c ++;
        echo $c;
    }

    echo "C fora da função: $c <br>";
    echo "C1 dentro da função: ";
    testeC();
    echo "<br>Chamando a função novamente: <br>";
    echo "C2 dentro da função: ";
    testeC();
    echo "<br>Chamando a função novamente: <br>";
    echo "C3 dentro da função: ";
    testeC();




    