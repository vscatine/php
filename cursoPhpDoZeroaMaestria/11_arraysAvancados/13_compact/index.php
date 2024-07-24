<?php
$paciente = "vitor";
$dataConsulta = "2024-07-30";
$especialidade = "cardiologia";
$medico = "silvia";
$crm = "8957521-100";

$arrConsulta = compact("paciente", "dataConsulta", "especialidade", "medico", "crm");
print_r($arrConsulta);