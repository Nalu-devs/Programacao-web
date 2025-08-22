<?php

$idade = $_POST["idade"];
$faixa_etaria = $_POST["faixa_etaria"];

if ($idade >= 2 && $faixa_etaria=="bebe")
	header("Location: processaIdade.php?msg=Preecha a faixa etaria certa");

else if ($idade >= 12 && $faixa_etaria=="crianca")
	header("Location: processaIdade.php?msg=Preecha a faixa etaria certa");

else if ($idade >= 18 && $faixa_etaria=="adolescente")
	header("Location: processaIdade.php?msg=Preecha a faixa etaria certa");

else if ($idade < 18 && $faixa_etaria=="adulto")
	header("Location: processaIdade.php?msg=Preecha a faixa etaria certa");
?>
