<?php

// ==== Classe Pedido ====
class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: {$this->cliente} - Total dos Itens: R$ {$this->valorItens}<br>";
    }
}


// ==== Classe NotaFiscal ====
class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $this->totalPagar = $this->totalPedido + ($this->totalPedido * ($this->imposto / 100));
    }

    public function exibirNota() {
        echo "Subtotal: R$ {$this->totalPedido}<br>";
        echo "Imposto: {$this->imposto}%<br>";
        echo "Total a pagar: R$ {$this->totalPagar}<br>";
    }
}


// ==== Teste das classes ====

// Criando um pedido
$pedido = new Pedido("Leonardo");
$pedido->adicionarItem(50);
$pedido->adicionarItem(30);
$pedido->exibirPedido();

// Pegando apenas o total e enviando para a nota fiscal
$nota = new NotaFiscal($pedido->getTotal(), 8);
$nota->calcularTotal();
$nota->exibirNota();