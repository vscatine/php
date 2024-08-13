<?php
function ordenarNumeros($arrNums) {
    if (!is_array($arrNums)) {
        return ["erro" => "$arrNums não é um array! Essa função aceita apenas arrays"];
    } else {
        $countNotNum = 0;
        $newArr = [];
        foreach ($arrNums as $item) {
            if (!is_numeric($item)) {
                $countNotNum ++;
                break;
            } else {
                $newArr[] = $item;
            }
        }

        if ($countNotNum > 0) {
            return ["erro" => "O array contém itens não numéricos."];
        } else {
            $n = count($newArr);
            for ($c = 0; $c < $n; $c++) {
                for ($i = 0; $i < ($n - 1 - $c); $i++) {
                    
                }
            }
        }
    }
}