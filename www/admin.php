<?php
require_once "config.php";

/*if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
  header('Location: login.php');
  exit();
}*/
if (isset($_SESSION["admin"])) {
	echo "HOLA";
	}

$query = "SELECT * FROM Person";
$result = mysqli_query($conn, $query);

if (!$result) {
  // Mostrar un mensaje de error
  echo "Hubo un error de consulta: " . mysqli_error($conn);
  exit;
}

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Password</th><th>Role</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["password"] . "</td><td>" . $row["role"] . "</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>
