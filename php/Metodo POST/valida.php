<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$faixa_etaria = $_POST["faixa_etaria"];
$msg = $_POST["msg"];

if ($nome == "")
	header("Location: processaValidacao.php?msg=Preencha o nome");

else if ($email == "")
	header("Location: processaValidacao.php?msg=Preencha o email");

else if ($idade == "")
	header("Location: processaValidacao.php?msg=Preencha a idade");

else if ($faixa_etaria == "")
	header("Location: processaValidacao.php?msg=Preencha a faixa etaria");
?>
