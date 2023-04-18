<?php
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $nickname = $_POST['nickname'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $para = 'tu-correo@gmail.com';
    $asunto = 'Nuevo mensaje de contacto';

    $mensaje_final = "Nombre: ".$nombre."\n"."Nickname: ".$nickname."\n"."Teléfono: ".$telefono."\n"."Mensaje: "."\n\n".$mensaje;
    $cabeceras = 'From: '.$nombre.' <'.$para.'>'."\r\n".'Reply-To: '.$para."\r\n".'X-Mailer: PHP/'.phpversion();

    if(mail($para, $asunto, $mensaje_final, $cabeceras)){
        echo '<p>Tu mensaje ha sido enviado.</p>';
    } else {
        echo '<p>Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo.</p>';
    }
}
?>
