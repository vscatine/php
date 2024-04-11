<?php
    $nums = [];
    for ($n = 10; $n <= 20; $n++) {
        $nums[] = $n;
    }

    for ($c=0; $c < count($nums); $c++) {
        if ($nums[$c] % 2 != 0) {
            echo "$nums[$c] é ímpar. <br>";
        }
    }