<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo!</title>
</head>
<body>
<p><a href="index.php">Inicio</a></p>

<form method="POST" action="login.php">
	<p>Email:<input type="text" name="email"></p>
	<p>Senha:<input type="password" name="senha"></p>
	<input type="submit" name="OK">
</form>
</html>
<?php 

if(!empty($_POST)){
	if ($_POST['email'] == 'admin' && $_POST['senha'] == 'admin'){
		$_SESSION['logado'] =  true;
		$_SESSION['nome'] = 'Administrador';
		header('location: admin.php');
	}else {
		echo '<p><strong>Login ou senha invalidos</strong></p>';
	}
}