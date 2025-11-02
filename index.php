<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM usuarios");

echo "<h1>Usuarios en la base de datos:</h1>";
while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row["nombre"] . "</p>";
}

$conn->close();
?>
