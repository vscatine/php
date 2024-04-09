<?php
    /*Crie váriaveis com tipos de dados diferentes. Cheque se a variável é um inteiro e aprensente uma mensamge para sim e para não.*/
    $arr = ["texto", 15, 159.5, true, array(12)];
    $c = 0;
    while ($c <= 4) {
        $temp = $arr[$c];
        $tip = gettype($arr[$c]);
        if (is_int($temp)) {
            echo "$temp é um número inteiro. <br>";
        }  else {
            echo "$temp não é um número inteiro, pois seu tipo é $tip. <br>";
        }
        $c++;
    }

?>