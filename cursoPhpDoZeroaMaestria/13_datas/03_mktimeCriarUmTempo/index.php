<?php
$birthDay = mktime(22, 57, 33, 10, 31, 1994);
echo $birthDay . "<br>";

$birthDayFormat = date('d/m/Y H:i:s', $birthDay);
echo $birthDayFormat . "<br>";
