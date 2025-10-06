<?php

  $conexao = mysqli_connect("localhost","aluno","aluno.etec");
  $banco = mysqli_select_db($conexao,"teste");
  $query = mysqli_query($conexao,"SELECT * from cursos");

  echo "<table border=1 width=300><tr><th>COD.</th><th>CURSO</th><th>VAGAS</th></tr>";
  while($linha = mysqli_fetch_array($query)){
    echo "<tr><td>".$linha[0]."</td><td>".$linha[1]."</td><td>".$linha[2]."</td></tr>";
  }
  echo "</table>";

?>
