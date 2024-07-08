<?php
    function retornaTexto($a = "Valor padrão") {
        return "O texte inserido é: $a <br>";
    }

    echo retornaTexto();
    echo retornaTexto("informção definida na chamada na função.");