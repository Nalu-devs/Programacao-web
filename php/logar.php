<?php

session_start();
$email = 'teste@teste.com';
$senha = 'teste123';
if($_POST['email']==$email && $_POST['senha']==$senha){
	$_SESSION['login']=true;
	header("Location: restrito.php");
}
else{
	header("Location: index.php");
}
?>