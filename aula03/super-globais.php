<?php

echo '<pre>';

//print_r($_SERVER);

//$_ENV['bd'] =  'dev';

//print_r($_ENV);

// .php?nome=lucas&email=bruninhopcs@hotmail.coms

//print_r($_GET);

// if (isset($_GET['nome'])) {
// 	echo $_GET['nome'];
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<input type="name" name="ssss">
	<input type="file" name="img">
	<button type="submit">OK</button>
</form>
</body>
</html>


<?php

//print_r($_POST);

// session_start();
// $_SESSION['nome'] = 'Lucas';
// print_r($_SESSION);


// setcookie('cor', 'preto', stro_time('1 day'));
// print_r($_COOKIE);

//print_r($_REQUEST);
print_r($_FILES);
print_r($_POST);