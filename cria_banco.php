<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_usuarios";

// Criar conexão
$conn = new mysqli($servername, $username, $password);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Criar banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso<br>";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

// Selecionar banco de dados
$conn->select_db($dbname);

// Criar tabela
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();
?>
