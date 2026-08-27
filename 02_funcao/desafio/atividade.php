<?php

require_once "funcao.php";

$pedido = calcularPedido("teclado", 100, 5, 10, 20);

echo "Produto: " . $pedido["nome_produto"] . "<br>";
echo "Subtotal:  " . $pedido["subtotal"] . "<br>";
echo "Desconto:  " . $pedido["valor_desconto"] . "<br>";
echo "Imposto: " . $pedido["valor_imposto"] . "<br>";
echo "Total final:  " . $pedido["total_final"] . "<br>";

?>
