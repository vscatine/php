<?php
$arr = ["fogão", "geladeira", "forno", "bancada"];
$strArr = implode(" | ", $arr);
echo $strArr;

echo "<br>";

$strFor = "";
$separador = "<->";
for ($c=0; $c < count($arr); $c++) {
    if ($c === (count($arr) - 1)) {
        $strFor .= $arr[$c];
    } else {
        $strFor .= $arr[$c] . $separador;
    }
    
}
echo $strFor;