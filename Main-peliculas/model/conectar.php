<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peliculas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//
// Check connection
if ($conn->connect_error) {
    die("Conexion ha fallado: " . $conn->connect_error);
}
//echo "Connected successfully";
?>