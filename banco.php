<?php
$servername = "186.224.247.117";  // Endereço do servidor MySQL
$username = "leonardo";  // Nome de usuário do MySQL
$password = "alcatel123";   // Senha do MySQL
$database = "joao"; // Nome do banco de dados

// Crie uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Defina o conjunto de caracteres para UTF-8 (opcional)
$conn->set_charset("utf8");

// Agora, a variável $conn contém a conexão com o banco de dados

// Você pode usar $conn para executar consultas e interagir com o banco de dados

// Exemplo de consulta

?>
