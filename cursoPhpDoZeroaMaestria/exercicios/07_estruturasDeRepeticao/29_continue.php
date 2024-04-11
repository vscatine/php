<?php
    $nums = [];
    $c = 10;
    while ($c <= 100) {
        $nums[] = $c;
        $c +=10;
    }
    
    $c = 0;
    while ($c < count($nums)) {
        if ($nums[$c] == 30 || $nums[$c] == 40) {
            $c++;
            continue;
        }
        echo "Loop $nums[$c] <br>";
        $c++;
    }