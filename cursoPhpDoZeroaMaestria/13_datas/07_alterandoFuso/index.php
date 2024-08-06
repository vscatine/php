<?php
date_default_timezone_set('America/Sao_Paulo');
$data = new DateTime();
print_r($data);
echo "<br>";

$data->setTimezone(new DateTimeZone('Europe/Budapest'));
print_r($data);
echo "<br>";