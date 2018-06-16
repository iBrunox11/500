<?php

require 'conexao.php';

$nome = 'bruno dias';
$email = 'bru@.cmd';
$senha = '123';

$query = "INSERT INTO usuarios(
		  nome,email,senha) VALUE ('{$nome}', '{$email}', '{$senha}')";

		  echo '<pre>';
		  echo $query;
		  echo '<br>';

		  $result = mysqli_query($con,$query);

		  var_dump($result);