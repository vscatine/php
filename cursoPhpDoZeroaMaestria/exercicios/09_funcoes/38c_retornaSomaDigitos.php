<?php
    function sumDigits($n) {
        if (!is_int($n)){
            return 'Deve-se inserir um número inteiro!<br>';
        } else {
            $digStr = strval($n);
            $digSum = 0;
            for ($c = 0; $c < strlen($digStr); $c++) {
                $digNum = intval($digStr[$c]);
                $digSum += $digNum;
            }
            return $digSum;
        }
    }

    echo sumDigits(49);