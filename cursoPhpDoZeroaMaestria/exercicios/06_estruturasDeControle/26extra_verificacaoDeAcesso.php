<?php
    function verificarAcesso($idade, $permissao) {
        if (is_int($idade) && is_bool($permissao)) {
            if ($idade >= 18 && $permissao) {
                return "Acesso permitido. <br>";
            } else if ($idade < 18 && $permissao) {
                return "Acesso NEGADO. Idade miníma requirida: 18 anos. <br>";
            } else {
                return "Acesso NEGADO. Autorização necessária. <br>";
            }

        } else {
            return "Idade deve ser um número inteiro e permissão um booleano. <br>";
        }
    };

    echo verificarAcesso(17, true);
?>