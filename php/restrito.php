<?php
session_start();
require 'menu.php';
 if(!isset($_SESSION{'login'})){
	header("Location: index.php");
 }
?>
<h1>Logado</h1>