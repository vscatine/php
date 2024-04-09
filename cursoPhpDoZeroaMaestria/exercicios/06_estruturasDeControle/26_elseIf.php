<?php
    $cars = [
        ['placa' => 'APY8596', 'velocidade' => 49],
        ['placa' => 'PX43624', 'velocidade' => 60],
        ['placa' => 'LTT3371', 'velocidade' => 100]
    ];
    $c = 0;

    while ($c < count($cars)) {
        $placa = $cars[$c]['placa'];
        $vel = $cars[$c]['velocidade'];
        if ($vel < 60) {
            echo "Muito bem! você está abaixo do limite de velocidade da via (60 kmh/h). <br>";
        } else if ($vel == 60) {
            echo "CUIDADO! você está no limite de velocidade da via (60 km/h). <br>";
        } else {
            echo "MULTADO! <br> Placa: $placa. <br> Velocidade: $vel km/h. <br> Limite da via: 60 km/h.";
        }
        $c++;
    }
?>