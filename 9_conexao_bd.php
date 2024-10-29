<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercicio";

try {
    // Tenta criar uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica de houve alguem erro na conexão
    if ($conn->connect_error) {
        throw new Exception("Falha na conexão: " . $conn->connrc_error);
    }

    echo "Conexão realizada com sucesso.";
} catch (Exception $e) {
    // exibe uma mensagem de erro amigavel
    echo "Erro ao conectar ao bando de dados: " . $e->getMessage();
}

// Digitar PHP (1º Aqui)

?>

<!-- Para criar o BD -->
<!-- CREATE DATABASE exercicio; -->

<!-- Para criar a Tabela -->
<!-- CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
); -->


