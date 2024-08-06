<?php
echo "<h2>DateTime</h2>";
$data = new DateTime();
print_r($data);
echo "<br>";

//Format e Modify
echo "<h3>Format e modify </h3>";
echo $data->format('d/m/Y') . "<br>";
echo $data->format('D -> d - M - y') . "<br>";
echo $data->format('l -> d . F . Y') . "<br>";

$data->modify("+10 days");
echo $data->format('d/m/Y') . "<br>";

$data->modify("+1 year");
echo $data->format('d/m/Y') . "<br>";

$data->modify("-7 days");
echo $data->format('d/m/Y') . "<br>";


//setDate() e setTime()
echo "<h3>setDate() e setTime()</h3>";
$today = new DateTime();
print_r($today);
echo "<br>";

$today->setDate(1994, 10, 31);
echo $today->format('d/m/Y') . "<br>";

$today->setTime(23, 57, 07);
echo $today->format('d/M/Y H:i:s');


