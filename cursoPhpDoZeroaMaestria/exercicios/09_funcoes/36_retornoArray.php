<?php
    function returnPlusSeven($arr) {
        $sevenArr = [];
        if (!is_array($arr)) {
            return "Para essa função, é necessário passar um Array.<br>";
        } else {
            foreach($arr as $n) {
                if (!is_numeric($n)) {
                    echo "$n não é um número! <br>";
                    continue;
                } else {
                    if ($n > 7) {
                        $sevenArr[] = $n;
                    }
                }
            }
        }
        return $sevenArr;
    }

    print_r(returnPlusSeven(12));
    $arrNum = [1, 3, "twelve", 7, 9, 11, 15, 0];
    print_r(returnPlusSeven($arrNum));