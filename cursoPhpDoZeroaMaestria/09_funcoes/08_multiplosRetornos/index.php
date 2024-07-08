<?php
    function multiData($name, $age) {
        return [$name, $age];
    }

    $dados = multiData("Vitor", 29);

    print_r($dados);

    echo "<br>";

    echo "Name: $dados[0] <br> Age: $dados[1] <br>";