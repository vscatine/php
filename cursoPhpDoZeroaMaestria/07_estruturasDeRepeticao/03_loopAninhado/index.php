<?php
    $c1 = 1;
    

    while ($c1 <= 5){
        echo "<h3>Loop externo $c1</h3>";
        $c2 = 1;
        while ($c2 <= 3) {
            echo "<pre>    Loop interno $c2</pre>";
            $c2++;
        }
        $c1++;
    }
?>