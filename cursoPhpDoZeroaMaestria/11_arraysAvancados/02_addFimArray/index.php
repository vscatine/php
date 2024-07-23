<?php
$arr = [1, 2, 3];
$arr[] = 4;
print_r($arr);

for ($c=5; $c<=10; $c++) {
    $arr[] = $c;
}
echo "<br>";
print_r($arr);
