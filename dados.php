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
$servername = "192.95.43.212:3306";
$username = "gama";
$password = "t!m305";
$dbname = "descomplica";
// Dados do Usuario
$nome = $_GET['nome'];
$email = $_GET['email'];

//Get IP connection
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

	//End IP Connection

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO pessoas (nome, email, data_cad, ip)
VALUES ('".$nome."','".$email."',NOW(),'".$ip."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: index.html");
$conn->close();
<<<<<<< HEAD
>>>>>>> cb5aa6aa6314410bcf52c2630ddd599361360f38
=======



>>>>>>> f9d91c725b0d8094ba69f330c039ed722739e047
?>