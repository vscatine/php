 <?php
//  1 – Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número.
function sumTimesFirst ($n1, $n2) {
    if (!is_numeric($n1) || !is_numeric($n2)) {
        return "Essa função só aceita valores numéricos!<br>";
    } else {
        $s = $n1 + $n2;
        $res = $s * $n1;
        return $res;
    }
}

$teste = sumTimesFirst(45, 10);
echo $teste . "<br>";

$teste = sumTimesFirst(20, "text");
echo $teste . "<br>";