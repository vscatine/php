<?php
    function verificarCategoria($cat) {
        if (is_string($cat)) {
            $pref = "Essa categoria é de produtos";
        switch($cat) {
            case "eletrônicos":
                return "$pref eletrônicos. <br>";
                break;
            case "vestuário":
                return "$pref de vesturário. <br>";
                break;
            case "alimentos":
                return "$pref alimenticios.";
                break;
            default:
                return "Categoria desconhecida.";
        }
        } else {
            return "Apenas textos são aceitos.";
        }
        
    };

    echo verificarCategoria("vestuário");
?>