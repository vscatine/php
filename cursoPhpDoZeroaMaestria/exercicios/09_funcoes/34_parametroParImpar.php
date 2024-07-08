<?php
    function parImpar($n) {
        if (!is_int($n))  {
            echo "Por favor, insira um <b>número inteiro</b>!<br>
            <b>Exemplo: </b>1, 85, 73, 6, 8, 10.<br>";
        } else {
            if ($n % 2 === 0) {
                echo "$n é PAR. <br>";
            } else {
                echo "$n é ÍMPAR. <br>";
            }
        }
    }

    parImpar(10);
    parImpar(15);
    parImpar(1);
    parImpar(2);
    parImpar(true);
    parImpar("txt");
    parImpar(2.6);