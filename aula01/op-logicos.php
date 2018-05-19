<?php 

echo '<pre>';
echo 'Operando AND && <br>';
echo 'true and true ';
var_dump(true AND true);
echo 'true and false ';
var_dump(true && false);
echo 'false and true ';
var_dump(false && true);
echo 'false and false ';
var_dump(false && false);
echo '<hr>';

echo 'Operando OR || <br>';
echo 'true and true ';
var_dump(true || true);
echo 'true and false ';
var_dump(true || false);
echo 'false and true ';
var_dump(false || true);
echo 'false and false ';
var_dump(false || false);
echo '<hr>';

echo 'Operando XOR <br>';
echo 'true and true ';
var_dump(true XOR true);
echo 'true and false ';
var_dump(true XOR false);
echo 'false and true ';
var_dump(false XOR true);
echo 'false and false ';
var_dump(false XOR false);
echo '<hr>';

echo 'Operando de NEGAÇAO !';
echo 'true and true ';
var_dump(!true);
echo '!false ';
var_dump(!false);
echo '!true ';
echo '<hr>';