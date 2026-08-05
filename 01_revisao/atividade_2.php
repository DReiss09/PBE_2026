<?php

$a = 1;
$b = -3;
$c = 2;

$delta = ($b * $b) - (4 * $a * $c);

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);

echo "O valor de x1 é: " . $x1;
echo "<br>";
echo "O valor de x2 é: " . $x2;
?>