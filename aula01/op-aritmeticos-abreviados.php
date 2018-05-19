<?php 

$num1 = readline('Digite o numero: ');

$num = 10;

$num += $num1;
echo 'Adição: ' . $num . PHP_EOL;
$num -= $num1;
echo 'Subtracao: ' . $num . PHP_EOL;
$num *= $num1;
echo 'Multiplicacao: ' . $num . PHP_EOL;
$num /= $num1;
echo 'Divisao: ' . $num . PHP_EOL;
$num %= $num1;
echo 'Módulo: ' . $num . PHP_EOL;