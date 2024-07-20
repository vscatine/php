<?php
    $str = "este item esta em promocao!";
    $arrText = explode(" ", $str);
    $formatTxt = "";

    foreach($arrText as $idx => $palavra) {
        if ($idx === 0) {
            $formatTxt .= ucfirst($palavra) . " ";
        } else if ($idx != (count($arrText)-1)) {
            $formatTxt .= $palavra . " ";
        } else {
            $formatTxt .= strtoupper($palavra);
        }
    }

    echo "$formatTxt";