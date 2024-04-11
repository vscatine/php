<?php
    $nums = [];
    for ($c = 1; $c <= 20; $c++) {
        $nums[] = $c;
    }

    for ($c = 0; $c < count($nums); $c++) {
        if ($nums[$c] % 2 == 0) {
            echo $nums[$c] . " é par.<br>";
        }
    }