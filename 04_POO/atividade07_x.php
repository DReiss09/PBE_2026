<?php

class ContaBancaria(){
    public $Titular
    public $Saldo
    
    public function __construct($nome_titular, $Titular, $Saldo) {
        $this->titular = $nome_titular;
        $this->Saldo = $saldo_inicial;
    }
    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    public function sacar($valor){
      $this->saldo = $this->saldo - $valor;   
    }
    public function exibirSaldo(){
        echo "titular: $this->titular Saldo: $this->Saldo <br>";
    }
}
$conta1 = new ContaBancaria("pedro", 0);
$conta1->depositar(100);
$conta1->sacar(200);
$conta1->exibirSaldo(100);
