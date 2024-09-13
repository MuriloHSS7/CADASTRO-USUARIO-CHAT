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

$sql = "SELECT id, nome, cpf, email, telefone, reg_date FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
;       echo " - Nome: " . $row["nome"] . "<br>";
        echo " - CPF: " . $row["cpf"] . "<br>";
        echo " - Email: " . $row["email"] . "<br>";
        echo " - Telefone: " . $row["telefone"] . "<br>";
        echo " - Data de Registro: " . $row["reg_date"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
