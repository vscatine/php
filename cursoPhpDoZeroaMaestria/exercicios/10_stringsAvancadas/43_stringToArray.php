<?php
$str = "carro - navio - helicoptero - jangada";
$arrStr = explode(" - ", $str);
print_r($arrStr);
foreach($arrStr as $item) {
    echo $item;
}