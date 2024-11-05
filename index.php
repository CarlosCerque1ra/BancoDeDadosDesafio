<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Crud Simples</title>
</head>
<body>
<h1>Gerenciamento de Usuários</h1>
    <div class="informacao">
        <form action="store.php" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" required>
            <label>CPF:</label>
            <input type="number" name="cpf" required>
            <label>Ano:</label>
            <input type="text" name="ano" required>
            <input type="submit" value="Adicionar Usuário">
        </form>
    </div>
    <h2>Lista de Alunos</h2>
    <div>
        <?php  include 'read.php'; ?>
    </div>
</body>
</html>