<?php
abstract class Calculos {
    public static function soma($arrNums) {
        $soma = 0;
        foreach($arrNums as $num) {
            $soma += $num;
        }
        return $soma;
    }
}

class Calculadora extends Calculos {

}

$nums = [3, 5, 9.6, 10];
echo Calculos::soma($nums);
echo "<br>";

$calc = new Calculadora;
echo $calc->soma($nums);
echo "<br>";