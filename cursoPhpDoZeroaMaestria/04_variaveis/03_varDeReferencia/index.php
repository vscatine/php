<?php
    $x = 10;
    $y =& $x;

    echo "$x <br>";
    echo "$y <br>";
    echo "<br>";

    $y = 15;

    echo "$x <br>";
    echo "$y <br>";
    echo "<br>";

    $x = 20;

    echo "$x <br>";
    echo "$y <br>";
    echo "<br>";
?>