<link rel="stylesheet" href="index.css">
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM criancas WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $criancas = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nome = $_POST['Nome']; // Recebe o novo titulo
    $CPF = $_POST['CPF']; // Recebe o novo autor
    $Ano = $_POST['Ano']; // Recebe o novo gênero
    $sql = "UPDATE criancas SET Nome='$Nome', CPF='$CPF', Ano='$Ano' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Usuário</title>
</head>
<body>
    <h1>Atualizar Usuário</h1>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="Nome" value="<?php echo $criancas['Nome']; ?>" required>
        <label>CPF:</label>
        <input type="number" name="CPF" value="<?php echo $criancas['CPF']; ?>" required>
        <label>Ano:</label>
        <input type="number" name="Ano" value="<?php echo $criancas['Ano']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <div class="cancelar"><a href="index.php">Cancelar</a> <!-- Link para voltar --></div>
</body>
</html>