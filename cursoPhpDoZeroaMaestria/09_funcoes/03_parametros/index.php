<?php
    function maxVel($vel) {
        if (is_int($vel) || is_float($vel)) {
            echo "A velocidade máxima é de $vel km/h <br>";
        }
        else {
            echo "Por favor, informe um valor númerico! <br>";
        }
    }

    maxVel(120);
    maxVel("Texto");