<?php
    /* Crie uma operação que retorne falso com igualdade
    e uma que retorne verdadeiro. */

    $user = "maria@gmail.com";
    $password = "12345";

    if ($user === "maria@gmail.com") {
        echo "Usuário encontrado. <br>" ;
    }

    if ($password != "12385") {
        echo "Senha incorreta.";
    } else {
        echo "Acesso concedido.";
    }

