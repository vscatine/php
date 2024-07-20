<?php
    $str = "Essa é minha string.";
    $strSub = substr($str, 7, 6); 
    $strSub2 = substr($str, 7);
    $strSub3 = substr($str, 7, -3);
    echo $strSub . "<br>";
    echo $strSub2 . "<br>";
    echo $strSub3;