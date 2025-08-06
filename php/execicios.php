<html>
<header>
<title>Aula 1</title>
</header>
<body>
<?php
$a = 3;
$b = 435;
$c = 2;
$fatorial=0;
$cont=0;


if($a>$b && $a>$c)
	echo "O valor ".$a." é o maior <br>";
else if($b>$a && $b>$c)
	echo "O valor ".$b." é o maior <br>";
else if($c>$a && $c>$b)
	echo "O valor ".$c." é o maior <br>";


if($a<$b && $b<$c)
	echo $a."-".$b."-".$c;
else if($a<$c && $c<$b)
	echo $a."-".$c."-".$b;
else if($b<$a && $a<$c)
	echo $b."-".$a."-".$c;
else if($b<$c && $c<$a)
	echo $b."-".$c."-".$a;
else if($c<$a && $a<$b)
	echo $c."-".$a."-".$b;
else if($c<$b && $b<$a)
	echo $c."-".$b."-".$a;

for($i=$a-1; $i>1; $i=$i-1){
    if($a%$i==0)
        $cont++;
}
if($cont==0)
    echo "<br>".$a." Número é primo";//o println serve para pular linha
else
	echo "<br>".$a." Número não é primo";

for($i=$c; $i>0; $i--){
	$fatorial+=$c*$i;
}
echo "<br>O fatorial de ".$c." é ".$fatorial;
?>