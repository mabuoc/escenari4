<?php
/*$servername = "escenari44_db_1";
$username = "mabdon";
$password = "tMujscZc8ywPgDMT4Y";
$dbname = "mabdon";*/
require_once "config.php";

// Crear conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar si la conexión es correcta
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

$username = $_POST["username"];
$password = $_POST["password"];
$query="SELECT * FROM Person WHERE name = '".$username."' AND (password = '".$password."');";
//echo ($query);
$result = mysqli_query($conn, $query);

if (!$result) {
  // Mostrar un mensaje de error
  echo "Hubo un error de consulta: " . mysqli_error($conn);
  exit;
}

if (mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
  if ($user["role"] == "admin") {
  	echo("Sóc admin");  
  	session_start();
  	$_SESSION["admin"] = true;
  	echo "<script>window.location.replace('admin.php');</script>";
    //header("Location: admin.php");
    exit;
  } else {
  	echo("NO sóc admin");  
  	echo "<script>window.location.replace('user.php?id=" . $user["id"] . "');</script>";
    //header("Location: user.php?id=" . $user["id"]);
    exit;
  }
} else {
  // Mostrar un mensaje de error
  echo "Nombre de usuario o contraseña incorrectos.";
}
?>
<html>
<head>
  <title>Error de login</title>
</head>
<body>
  <h1>Error de login</h1>
  <p>Usuario o contraseña incorrectos</p>
  <a href="index.php">Volver a intentar</a>
</body>
</html>
