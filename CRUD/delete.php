<?php
include('config.php');

if (isset($_GET['cod'])) {
    $cod = $_GET['cod'];

    // Excluindo o curso
    $sql = "DELETE FROM cursos WHERE cod = $cod";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else{
    header('Location: index.php');
}
mysqli_close($conn);
?>