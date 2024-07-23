<?php
$arrMult = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];


for ($c = 0; $c < count($arrMult); $c++) {
    echo "<h3>Array da posição $c</h3><br>";
    print_r($arrMult[$c]);
    echo "<br>";
    echo "<ul>";
    for ($i = 0; $i < count($arrMult[$c]); $i++) {
        echo "<li>" . $arrMult[$c][$i] . "</li><br>";
    }
    echo "</ul>";
}