<?php
    function soma($n1, $n2, $n3) {
        print_r(func_get_args());
        echo "<br>";
        echo func_num_args() . "<br";
        return $n1 + $n2 + $n3;
    }

    soma(2, 7, 1);