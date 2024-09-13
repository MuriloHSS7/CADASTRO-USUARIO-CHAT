<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_usuarios";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Preparar e vincular
$stmt = $conn->prepare("INSERT INTO usuarios (nome, cpf, email, telefone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $cpf, $email, $telefone);

// Definir parâmetros e executar
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$stmt->execute();

echo "Novo registro criado com sucesso";

$stmt->close();
$conn->close();
?>
