<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="form-group">
<form method="POST" action="ex-form.php">
<div class="form-grup">
	<label>Numero 2:</label><input class="form-control" type="number" name="num1">	
	<label>Numero 1:</label><input class="form-control" type="number" name="num2">	
</div>
	<div class="form-group">
    <label for="exampleFormControlSelect1">Selecione a operaçao:</label>
    <select class="form-control" name='select' id="exampleFormControlSelect1">
      <option></option>
      <option>Soma</option>
      <option>Substracao</option>
      <option>Divisao</option>
      <option>Multiplicacao</option>
    </select>
  </div>

<input type="submit" class="btn btn-secondary" value="Calcular">	
</form>
</div>
</div>
</body>
</html>
<?php

if(!empty($_POST)){
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $select = $_POST['select'];
 $result = 0;
 switch ($select) {
 	case 'Soma':
 		# code...
 		$result = $num1 + $num2;
 		break;
 	case 'Substracao':
 		# code...
 		$result = $num1 - $num2;
 		break;
 	case 'Divisao':
 		# code...
 		$result = $num1 / $num2;
 		break;
 	case 'Multiplicacao':
 		# code...
 		$result = $num1 * $num2;
 		break;
 	default:
 		# code...
 		break;
 }

		echo ("<div class='card'>
				  <div class='card-body'>
				    <span class='btn btn-primary btn-sm'>Resultado da $select:
				    <span class='badge badge-light'> $result</span></span>
				  </div>
			  </div>"
			  );
}