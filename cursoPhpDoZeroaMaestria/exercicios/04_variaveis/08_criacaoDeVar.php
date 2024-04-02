<?php
    /**Crie três variáveis com tipos de dados diferentes e as imprima na tela. */
    $nome = 'Vitor';
    $idade = 29;
    $programaEmPhp = true;
    $txtApoio = '';

    if ($programaEmPhp) {
        $txtApoio = 'sabe programar em PHP.';
    } else {
        $txtApoio = 'não sabe propagramar em PHP.';
    }

    echo "$nome tem $idade anos e $txtApoio";
?>