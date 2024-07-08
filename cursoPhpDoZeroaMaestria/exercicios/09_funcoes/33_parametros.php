<?php
    function personalData($name, $age) {
        if (is_string($name) && is_int($age)) {
            $nameFix = ucfirst(trim($name));
            echo "$nameFix tem $age anos. <br>";
        } else {
            echo "Nome deve ser <b>texto</b> e idade deve ser um número inteiro! <br>";
        }
    }

    personalData("Vitor", 29);
    personalData(33, 12);
    personalData("Erro", 33.9);