<?php 

$idade = 19;
$temHabilitacao = true;

if ($idade >= 18 && $temHabilitacao) {
	echo 'Pode Dirigir';
} else if ($idade >= 18 && !$temHabilitacao) {
	echo 'Nao pode dirigir, mas pode tirar habilitacao';
} else {
	echo 'Nao pode dirigir e nem tirar habilitacao';
}