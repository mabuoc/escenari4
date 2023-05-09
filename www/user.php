<?php
require_once "config.php";

$id = $_GET["id"];
$query = "SELECT * FROM Person WHERE id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
  // Mostrar un mensaje de error
  echo "Hubo un error de consulta: " . mysqli_error($conn);
  exit;
}

if (mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
  echo "<h1>Bienvenido, " . $user["name"] . "</h1>";
  echo "<p>Su contraseña es: " . $user["password"] . "</p>";
} else {
  // Mostrar un mensaje de error
  echo "No se encontró el usuario con ID " . $id;
}

mysqli_close($conn);
?>
