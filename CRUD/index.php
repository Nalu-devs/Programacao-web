<?php
include('config.php');
$busca = '';
if (isset($_GET['busca']) && !empty(trim($_GET['busca']))) {
    $busca = mysqli_real_escape_string($conn, $_GET['busca']);
    $sql = "SELECT * FROM cursos WHERE curso LIKE '%$busca%'";
} else {
    $sql = "SELECT * FROM cursos";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <?php if (isset($_GET['sucesso'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars($_GET['sucesso']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (isset($_GET['erro'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars($_GET['erro']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

        <h2>Lista de Cursos</h2>
        <a href="create.php" class="btn btn-primary mb-3">Adicionar Novo Curso</a>
        <form method="GET" class="mb-4">
            <div class="input-group">
            <input type="text" class="form-control" name="busca" placeholder="Buscar curso..." value="<?php echo isset($_GET['busca']) ? htmlspecialchars($_GET['busca']) : ''; ?>">
            <button class="btn btn-primary" type="submit">Buscar</button>
            <a href="index.php" class="btn btn-secondary">Limpar</a>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Curso</th>
                    <th>Vagas</th>
                    <th>Período</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['cod']; ?></td>
                    <td><?php echo $row['curso']; ?></td>
                    <td><?php echo $row['vagas']; ?></td>
                    <td><?php echo $row['periodo']; ?></td>
                    <td>
                        <a href="edit.php?cod=<?php echo $row['cod']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?cod=<?php echo $row['cod']; ?>" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
