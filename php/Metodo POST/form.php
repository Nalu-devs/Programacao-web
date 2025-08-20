<html>
<body>

<form action="processa_post.php" method="POST">
	Nome: <input type="text" name="nome"><br>
	E-mail: <input type="text" name="email"><br>
	Idade: <input type="text" name="idade"><br>
	// Faixa Etaria:
	<select name="faixa_etaria">
		<option value="bebe" >Bebe</option>
		<option value="crianca" >Crianca</option>
		<option value="adolescente" >Adolescente</option>
		<option value="adulto" >Adulto</option>
	</select>
	<input type="submit">
</form>

</body>
</html>