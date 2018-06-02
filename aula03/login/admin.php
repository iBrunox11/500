<?php
session_start();

if(!$_SESSION['logado']) {
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<p><a href="logout.php">Logout</a></p>
</body>
</html>