<?php
    /* Verifique a maioridade das idades.*/
   $pessoas = array(
    array('nome' => 'Vitor', 'idade' => 29),
    array('nome' => 'Silvana', 'idade' => 17)
   );
   $c = 0;
   
   while ($c <= 1) {
    $nome = $pessoas[$c]['nome'];
    $idade = $pessoas[$c]['idade'];
    if ($pessoas[$c]['idade'] < 18) {
        echo "$nome tem $idade anos e é menor de idade. <br>";
    } else {
        echo "$nome tem $idade anos e é maior de idade. <br>";
    }
    $c++;
   }
   