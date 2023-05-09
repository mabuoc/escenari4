<?php require_once "config.php"; ?>

<html>
<head>
  <title>Login</title>
  <style>
    /* Alineación de los campos de texto */
    label {
      display: inline-block;
      width: 100px;
      text-align: right;
    }

    input[type="text"], input[type="password"] {
      display: inline-block;
      width: 200px;
    }
  </style>
</head>
<body>
  <!-- Logo encima del formulario -->
  <div style="text-align:center;">
    <img src="logo.png" alt="Logo de la empresa" style="width: 200px;">
  </div>

  <!-- Formulario de login -->
  <h1 style="text-align:center;">Login</h1>
  <form action="process-login.php" method="post" style="text-align:center;">
    <label for="username">Usuari:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Paraula de pas:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Enviar">
  </form>
  
  <!-- Pie de página -->
  <div style="text-align:center;">
    By admin
  </div>
</body>
</html>
