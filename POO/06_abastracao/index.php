<?php
/* 
Classe abstrata serve como modelo para outras e NÃO PODE SER INSTANCIADA.
*/
abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    protected function getSaldo() {
        return $this->saldo;
    }

    protected function setSaldo($newSaldo) {
        $this->saldo = $newSaldo;
    }

    /* Métodos abstratos devem obrigatoriamente ser declarados nas classes herdeiras.*/
    abstract protected function sacar($saqueVal);
    abstract protected function depositar($depositoVal);
}

class Itau extends Banco {
    public function saldoInicial($saldoIni) {
        $this->setSaldo($saldoIni);
    }

    public function mostraSaldo() {
        if($this->saldo < 0) {
            echo "<div style='color:red'> Saldo atual: R$ " . $this->saldo . "<hr></div>";
        } else {
            echo "<div> Saldo atual: R$ " . $this->saldo . "<hr></div>" ;
        }
    }

    public function sacar($saqueVal) {
        $this->saldo -= $saqueVal;
        echo "<div style='color:red'>Saque: - " . $saqueVal . "<hr></div>";
        $this->mostraSaldo();
    }

    public function depositar($depositoVal) {
        $this->saldo += $depositoVal;
        echo "<div style='color:green'> Deposito: + " . $depositoVal . "<hr></div>";
        $this->mostraSaldo();        
    }
}

$personalite = new Itau;
$personalite->saldoInicial(1500);
$personalite->mostraSaldo();
$personalite->sacar(2000);
$personalite->depositar(3500);
