<<<<<<< HEAD
<?php
// Dados do Servidor
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "descomplica";

// Dados do Usuario
$nome = $_GET['nome'];
$email = $_GET['email'];
$data = date('d/m/Y H:i:s');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pessoas (nome, email, data_cad)
VALUES ('".$nome."','".$email."','".$data."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: index.html");
$conn->close();
=======
<?php
// Dados do Servidor
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "descomplica";

// Dados do Usuario
$nome = $_GET['nome'];
$email = $_GET['email'];
$data = date('d/m/Y H:i:s');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pessoas (nome, email, data_cad)
VALUES ('".$nome."','".$email."','".$data."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: index.html");
$conn->close();
>>>>>>> cb5aa6aa6314410bcf52c2630ddd599361360f38
?>