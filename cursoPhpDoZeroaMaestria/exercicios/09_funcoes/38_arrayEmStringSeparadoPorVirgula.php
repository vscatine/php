<?php
    //Função nativa do PHP.
    function rArrayStringVirgula($arr) {
        $str = implode(", ", $arr);
        return $str;
    }
    
    // Criando minha função do zero.
    function newArrayStrVirgula($arr) {
        $str = '';
        foreach($arr as $idx=>$item) {
            if ($idx == (count($arr) - 1)) {
                $str .= "$item. <br>";
            } else {
                $str .= "$item, ";
            }
        }
        return $str;
    }

    $itens = ["arroz", "feijão", "ovos", "batata"];

    echo rArrayStringVirgula($itens);

    echo "<br>";

    echo newArrayStrVirgula($itens);