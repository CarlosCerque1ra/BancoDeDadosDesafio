<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM criancas"; // Consulta todos os usuários
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>CPF</th><th>Ano</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["Nome"] . "</td>
                <td>" . $row["CPF"] . "</td>
                <td>" . $row["Ano"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "<p>Nenhum usuário encontrado</p>"; // Mensagem se não houver usuários
}
?>