<?php

function calcularPedido($nome_produto, $preco_unitario, $quantidade, $desconto = 0, $imposto = 0){
    $subtotal = $preco_unitario * $quantidade;
    $valor_desconto = $subtotal * ($desconto / 100);
    $valor_imposto = $subtotal * ($desconto / 100);
    $total_final = $subtotal - $valor_desconto + $valor_imposto;

    return[
        "nomeProduto" => $nome_produto,
        "subtotal" => $subtotal,
        "valorDesconto" => $valor_desconto,
        "valorImposto" => $valor_imposto,
        "totalFinal" => $total_final
    ]
}

function calculeFrete($somaTotal){
    $frete = $valorTotal * (10/100);
    $TotalComFrete = $frete = $valorTotal;
     
    return $TotalComFrete;

}




?>