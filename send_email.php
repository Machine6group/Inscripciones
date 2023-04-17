<?php

  // Verificar si se han enviado los datos del formulario
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['team'])) {

    // Recuperar los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $team = $_POST['team'];

    // Configurar los datos del correo electrónico
    $to = "jbaigorri@gmail.com"; // Reemplazar con la dirección de correo electrónico del destinatario
    $subject = "Nuevo mensaje de contacto";
    $message = "Nombre: $name\nCorreo electrónico: $email\nTeléfono: $phone\nEquipo: $team";
    $headers = "From: jbaigorri@gmail.com"; // Reemplazar con la dirección de correo electrónico del remitente

    // Enviar el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
      echo "Mensaje enviado correctamente.";
    } else {
      echo "Error al enviar el mensaje.";
    }

  } else {
    // Mostrar un mensaje de error si los datos del formulario no se han enviado
    echo "Debe completar todos los campos del formulario.";
  }

?>
