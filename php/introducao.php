<!DOCTYPE html>
<html>
<head>
	<title>Aula 1 - Introdução PHP</title>
</head>
<body>
<?php
	$valor1 = -10;
	$valor2 = 20;
	$total = $valor1 + $valor2;
	$positivo = "sim";
	
	if($valor1 < 0){
		echo "valor1 é negativo <Br><br>";
	}
	else{
		echo "valor1 é positivo <Br><br>";
	}
	
	for($i = 1; $i <= 10; $i++){
		echo "rodada " . $i . "<br>";
	}
	
	echo "<br><br><br><h1>" . $total . "</h1>";
?>
</body>
</html>