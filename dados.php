<?php
// Dados do Servidor
$servername = "192.95.43.212";
$username = "gama";
$password = "t!m305";
$dbname = "descomplica";

// Dados do Usuario
$nome = $_GET['nome'];
$email = $_GET['email'];
$data = date('d/m/Y H:i:s');
$ip = $_SERVER['SERVER_ADDR'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pessoas (nome, email, data_cad, ip)
VALUES ('".$nome."','".$email."','".$data."','".$ip."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: index.html");
$conn->close();
?>