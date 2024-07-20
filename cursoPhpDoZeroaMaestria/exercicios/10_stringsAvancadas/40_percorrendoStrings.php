<?php
    $str = "O rato roeu a roupa do rei de Roma";
    $countA = 0;
    $arrA = ['a', 'á', 'à', 'ã', 'â'];
    for ($c=0; $c < strlen($str); $c++) {
        if (in_array($str[$c], $arrA)) {
            $countA ++;
        }
    }
    echo "Na frase '$str' existem $countA letras As. <br>";