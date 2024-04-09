<?php
    $arr = ["val01", 15.9, true, "val02", 85, "val03", 106];
    $c = 0;
    
    while ($c < count($arr)) {
        if (is_string($arr[$c])) {
            print_r($arr[$c]);
            echo "é uma string.<br>";
        } else {
            print_r($arr[$c]);
            echo " não é do tipo string. <br>";
        }
        $c++;
    }
?>