<?php
require 'classes/produto.php';
require 'models/produto.php';

use classes00\Produto as classe02;
use models01\Produto as model03;


$produto = new \classes00\Produto;
$produto->mostrarDetalhes();

$produto2 = new \models01\Produto;
$produto2->mostrarDetalhes();

$produto3 = new classe02;
$produto->mostrarDetalhes();

$produto4 = new model03;
$produto4->mostrarDetalhes();