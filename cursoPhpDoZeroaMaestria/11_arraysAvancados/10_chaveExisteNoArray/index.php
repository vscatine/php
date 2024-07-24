<?php
$pessoa = [
    "nome" => "vitor",
    "idade" => 29
];

if (array_key_exists("nome", $pessoa)) {
    echo "A chave existe. <br>";
} else {
    echo "A chave NÃO existe. <br>";
}

if (array_key_exists("profissao", $pessoa)) {
    echo "A chave existe. <br>";
} else {
    echo "A chave NÃO existe. <br>";
}

if (isset($pessoa['idade'])) {
    echo "A chave existe. ISSET <br>";
} else {
    echo "A chave NÃO existe. ISSET <br>";
}

if (isset($pessoa['altura'])) {
    echo "A chave existe. ISSET <br>";
} else {
    echo "A chave NÃO existe. ISSET <br>";
}

//isset pode ser usado para verificar se algo existe no código, não apenas arrays, como variáveis, por exemplo.

$a = 0;

if (isset($a)) {
    echo "Isso está presente no código. <br>";
} else {
    echo "Isso não está presente no código. <br>";
}

if (isset($x)) {
    echo "Isso está presente no código. <br>";
} else {
    echo "Isso não está presente no código. <br>";
}