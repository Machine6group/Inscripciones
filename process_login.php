<?php

  // Verificar si se han enviado los datos del formulario
  if (isset($_POST['username']) && isset($_POST['password'])) {

    // Reemplazar "usuario" y "contraseña" con los valores que hayas establecido
    $username = "user";
    $password = "123456";

    // Verificar si el nombre de usuario y la contraseña son correctos
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
      // Iniciar sesión y redirigir al usuario a la página principal
      session_start();
      $_SESSION['username'] = $username;
      header("Location: misiones.php");
      exit();
    } else {
      // Mostrar un mensaje de error si el nombre de usuario o la contraseña son incorrectos
      echo "Nombre de usuario o contraseña incorrectos.";
    }

  } else {
    // Mostrar un mensaje de error si los datos del formulario no se han enviado
    echo "Debe ingresar un nombre de usuario y contraseña.";
  }

?>
