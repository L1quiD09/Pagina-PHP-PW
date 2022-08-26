<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "peliculas";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
//echo "Conexión Exitosa a la Base de Datos";
?>