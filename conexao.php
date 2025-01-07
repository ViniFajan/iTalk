<?php
// conexao.php

try {
    // Conexão com o banco de dados SQLite
    $pdo = new PDO('sqlite:' . __DIR__ . '/db.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
