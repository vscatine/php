<?php
    /*Crie um array associativo com características de uma pessoa.
    Verifique se a pessoa é maior de idade e imprima uma mensagem, caso seja. */

    $pessoa = [
        'nome' => 'Gabriela',
        'idade' => 18
    ];
    $nome = $pessoa['nome'];

    if ($pessoa['idade'] >= 18) {
        echo "$nome é maior de idade.";
    } else {
        echo "Atenção! $nome é menor de idade.";
    }
?>