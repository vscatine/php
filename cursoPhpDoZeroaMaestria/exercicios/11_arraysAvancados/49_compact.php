<?php
$nomePet = "sombra";
$especie = "canino";
$raca = "australian";
$sexo = "f";
$dataNascimento = "2015-05-21";
$nomeTutor = "gabriela";
$cpf = "485.986.953.12";

$arrPet = compact("nomePet", "especie", "raca", "sexo", "dataNascimento", "nomeTutor", "cpf");

foreach($arrPet as $key => $valor) {
    echo "<b>$key</b>: $valor <br>";
}