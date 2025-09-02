<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<h2>PHP Form Validation Example</h2>
<?php
 require 'menu.php';
 session_start();
 if(!isset($_SESSION{'login'})){
 
?>
<form method="post" action="logar.php">
  E-mail: <input type="text" name="email">
  <br><br>
  Senha: <input type="password" name="senha">
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>
<?php
 }
 else{
	 echo "Login já realizado";
 }
?>
</body>
</html>