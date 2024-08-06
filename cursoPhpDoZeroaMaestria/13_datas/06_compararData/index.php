<?php
$dataA = new DateTime();
$dataB = new DateTime();

if ($dataA > $dataB) {
    echo "Data A é maior que a B. <br>";
} else if ($dataA < $dataB) {
    echo "Data A é menor que a B. <br>";
} else {
    echo "As datas são iguais. <br>";
}

$dataA->setDate(2024, 10, 31);

if ($dataA > $dataB) {
    echo "Data A é maior que a B. <br>";
} else if ($dataA < $dataB) {
    echo "Data A é menor que a B. <br>";
} else {
    echo "As datas são iguais. <br>";
}

$dataB->setDate(1933, 12, 24);

if ($dataA > $dataB) {
    echo "Data A é maior que a B. <br>";
} else if ($dataA < $dataB) {
    echo "Data A é menor que a B. <br>";
} else {
    echo "As datas são iguais. <br>";
}

$dataA->setDate(2015, 06, 12);
$dataA->setTime(17, 35, 33);
$dataB->setDate(2015, 06, 12);
$dataB->setTime(17, 35, 33);

if ($dataA > $dataB) {
    echo "Data A é maior que a B. <br>";
} else if ($dataA < $dataB) {
    echo "Data A é menor que a B. <br>";
} else {
    echo "As datas são iguais. <br>";
}