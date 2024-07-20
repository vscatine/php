<?php
    function valorPlus10($arr) {
        if (!is_array($arr)) {
            return false;
        } else {
            $arrPlus10 = [];
            foreach($arr as $item => $valItem) {
                if ($valItem > 10) {
                   $arrPlus10[$item] = $valItem;
                }
            }
            return $arrPlus10;
        }
    }

    $prods = [
        'lampada' => 25.96,
        'lapis' => 2.65,
        'monitor' => 795.99
    ];

    print_r($prods);
    echo "<br>";

    $prodsPlus10 = valorPlus10($prods);
    print_r($prodsPlus10);