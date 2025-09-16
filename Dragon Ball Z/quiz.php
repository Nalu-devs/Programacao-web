<?php

$certas = [
  'q1' => 'b',
  'q2' => 'a', 
  'q3' => 'b',
  'q4' => 'b',
  'q5' => 'b',
  'q6' => 'c', 
  'q7' => 'a',
  'q8' => 'b',
  'q9' => 'b',
  'q10' => 'b'
];

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];
$pontos = 0;

$chaves = array_keys($certas);
for ($i = 0; $i < count($chaves); $i++) {
    $pergunta = $chaves[$i];
	if ($_POST[$pergunta] == $certas[$pergunta]) {
            $pontos++;
        }
}


if ($q1 == "")
	header("Location: index.php?msg=Preencha a resposta 1");

else if ($q2 == "")
	header("Location: index.php?msg=Preencha a resposta 2");

else if ($q3 == "")
	header("Location: index.php?msg=Preencha a resposta 3");

else if ($q4 == "")
	header("Location: index.php?msg=Preencha a resposta 4");

else if ($q5 == "")
	header("Location: index.php?msg=Preencha a resposta 5");

else if ($q6 == "")
	header("Location: index.php?msg=Preencha a resposta 6");

else if ($q7 == "")
	header("Location: index.php?msg=Preencha a resposta 7");

else if ($q8 == "")
	header("Location: index.php?msg=Preencha a resposta 8");

else if ($q9 == "")
	header("Location: index.php?msg=Preencha a resposta 9");

else if ($q10 == "")
	header("Location: index.php?msg=Preencha a resposta 10");

setcookie('pontuacao', $pontos);
header("Location: index.php?msg=Sua pontuação final é: " . $pontos . " pontos!");
?>
