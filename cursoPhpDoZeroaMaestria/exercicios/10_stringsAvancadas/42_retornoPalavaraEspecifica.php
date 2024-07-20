<?php
    $str = "cadê o meu queijo? Ele estava aqui em cima.";
    $cheese = substr($str, strpos($str, "queijo"), 6);
    echo $cheese;