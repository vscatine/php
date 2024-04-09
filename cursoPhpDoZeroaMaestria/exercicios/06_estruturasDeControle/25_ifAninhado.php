<?php
    $arr = [15, 131, "txt", 135.66, "txt2"];
    $c = 0;

    while ($c < count($arr)) {
        $temp = $arr[$c];
        if (is_int($temp) || is_double($temp)) {
            $mult = $temp * 2;
            if ($mult > 100) {
                echo "$mult é maior do que 100. <br>";
            } else {
                echo "$mult é menor do que 100. <br>";
            }
            
        } else {
            echo "$temp não é um número. <br>";
        }
        $c++;
    }
?>