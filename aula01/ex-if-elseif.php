<?php 

// CLI
// NOta - Digite sua nota
// Frequencia - Digite sua frequencia
// Se está aprovado
// Se está em recuperacao
// Se está reprovado
// Aprovado - nota >= 7 e frequencia >= 8
// Recuperacao - nota >= 5 ou nota <= 7  e frequencia >= 8
// Reprovado - nota < 5 ou frequencia < 8

$nota = readline('Digite sua nota: ');
$frequencia = readline('Digite sua frequencia: ');

if ($nota >= 7 && $frequencia >=8) {
	echo 'Aprovado' . PHP_EOL;
} else if ($nota >= 5 || $nota <= 7 && $frequencia >= 8) {
	echo 'Aprovado' . PHP_EOL;
} else {
	echo 'Reprovado' . PHP_EOL;
}