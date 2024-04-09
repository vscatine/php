<?php
    function calcularDesconto($val, $cat) {
        $desc = 0;
        $valTot = 0;
        switch($cat){
            case "eletrônicos":
                $desc = $val * 0.10;
                break;
            case "vestuário":
                $desc = $val * 0.20;
                break;
            case "alimentos":
                $desc = $val * 0.05;
                break;
            default:
                $desc = 0;
        }
        $valTot = $val - ($desc);
        return $valTot;
    };

    echo calcularDesconto(100, "outr");
?>