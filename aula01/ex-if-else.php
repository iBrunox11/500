<?php 

// CLI
//  Receber idade
// Se maior idade
// Exibir Vocë é maior de idade
// Senao
// Exibir Vocë é menor de idade

$idade = readline('Digite a sua idade '. PHP_EOL);

if ($idade >= 18) {
	echo 'Vocë é maior de idade'. PHP_EOL;
} else {
	echo 'Vocë é menor de idade';
}