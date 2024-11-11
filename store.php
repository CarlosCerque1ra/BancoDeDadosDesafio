<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $Nome = $_POST['Nome']; // Recebe o nome
    $CPF = $_POST['CPF']; // Recebe o email
    $Ano = $_POST['Ano']; // Recebe o email
    $sql = "INSERT INTO criancas(Nome, CPF, Ano) VALUES ('$Nome', '$CPF', '$Ano')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}


?>