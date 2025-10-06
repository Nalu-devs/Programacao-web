<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $curso = $_POST['curso'];
    $vagas = $_POST['vagas'];
    $periodo = $_POST['periodo'];

    // Preparando a query
    $sql = "INSERT INTO cursos (curso, vagas, periodo) VALUES ('$curso', '$vagas', '$periodo')";
    
    
    if (mysqli_query($conn, $sql)) {
        // Redireciona com mensagem de sucesso
        header('Location: index.php?sucesso=Curso cadastrado com sucesso');
        exit;
    } else {
        // Redireciona com mensagem de erro
        $erro = urlencode("Erro ao cadastrar curso: " . mysqli_error($conn));
        header("Location: index.php?erro=$erro");
        exit;
    }
} else {
    header('Location: index.php?erro=Requisição inválida');
    exit;
}

mysqli_close($conn);
?>
