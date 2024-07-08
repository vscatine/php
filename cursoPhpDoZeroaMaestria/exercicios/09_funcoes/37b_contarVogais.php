<?php
    function countVowels($str) {
        $strLow = strtolower($str);
        $vowels = ["a", "ã", "á", "à", "e", "é", "ê", "i", "í", "o", "ó", "ò", "õ", "ô", "u", "ú"];
        $vowelsCount = 0;

        for ($c = 0; $c < strlen($strLow); $c++) {
            if (in_array($strLow[$c], $vowels)) {
                $vowelsCount ++;
            }
        }

        return $vowelsCount;
    }

    $contagem = countVowels("Vitor Scatine");
    echo "$contagem <br>";
    
    