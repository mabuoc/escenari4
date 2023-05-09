<?php
// Configuración de la conexión a la base de datos
$servername = "db";
$username = "mabdon";
$password = "tMujscZc8ywPgDMT4Y";
$dbname = "mabdon";

// Crear conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar si la conexión es correcta
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
?>
