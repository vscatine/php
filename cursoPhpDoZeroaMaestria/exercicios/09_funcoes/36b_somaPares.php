<?php
    function sumEvenNumbers($n) {
        $sumEven = 0;
        for ($c = 1; $c <= $n; $c++) {
            if ($c % 2 === 0) {
                $sumEven += $c;
            }
        }
        return $sumEven;
    }

    echo sumEvenNumbers(16);

    
    