<?php
// criar_tabela.php
include 'conexao.php';  // Inclui o arquivo de conexão

// Comando SQL para criar a tabela 'users' caso não exista
$query = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
)";

// Executa o comando SQL
$pdo->exec($query);
echo "Tabela criada com sucesso!";
?>
