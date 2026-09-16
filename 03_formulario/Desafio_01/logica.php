<?php

$nome = $_POST["nome"] ?? "";
$salario_bruto = $_POST["salario_bruto"] ?? 0;
$horas_extras = $_POST["horas_extras"] ?? 0;
$beneficios = $_POST["beneficios"] ?? 0;
$descontos = $_POST["descontos"] ?? 0;

// primeiro precisamos descobrir quanto que ganha por hora
$valor_hora = $salario_bruto / 160;

// agora sim conseguimos calcular o valor que ganha com as horas extras
$salario_horas_extras = $horas_extras * $valor_hora * 1.5;

// total do salario bruto + valor ganho com horas extras + beneficios
$salario_bruto_sem_descontos = $salario_bruto + $salario_horas_extras + $beneficios;

// calcular impostos
if ($salario_bruto_sem_descontos > 5000) {
    $imposto = $salario_bruto_sem_descontos * 0.10;
} elseif ($salario_bruto_sem_descontos >= 3000) {
    $imposto = $salario_bruto_sem_descontos * 0.05;
} else {
    $imposto = 0;
}

// calculo de salário líquido
$salario_liquido = $salario_bruto_sem_descontos - $imposto;

// status do funcionário
$status = ($salario_liquido > 4000) ? "Bem remunerado" : "Médio";

echo "Nome: $nome <br>";
echo "Salário Bruto: R$ $salario_bruto <br>";
echo "Salário Bruto + Total com horas Extras + Benefícios: R$ $salario_bruto_sem_descontos <br>";
echo "Descontos: R$ $descontos <br>";
echo "Imposto Aplicado: R$ $imposto <br>";
echo "Salário Líquido: R$ $salario_liquido <br>";
echo "Status: $status <br>";
?>
