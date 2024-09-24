<?php
class Veiculo {
    protected function andar() {
        echo "Andando...";
    }
    
}

class Carro extends Veiculo {
    public function mostraAcao() {
        echo $this->andar();
    }
}

$fusca= new Carro;
$fusca->mostraAcao();

