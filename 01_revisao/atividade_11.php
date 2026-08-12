<?php

$numeros= [9,20,30,40,50,60,70,80,-90,-100];
$maior = -9999;

foreach ($numeros as $numero){
    if ($numero > $maior){
        $maior=$numero;
    }
}
echo " O maior número é = " . $maior;
?>