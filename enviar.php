<?php
// Verificar que se recibieron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Obtener los datos del formulario
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$equipo = $_POST["equipo"];
	$mensaje = $_POST["mensaje"];

	// Configurar el destinatario del correo
	$destinatario = "jbaigorri@gmail.com";

	// Configurar el asunto y el cuerpo del correo
	$asunto = "Formulario de contacto";
	$cuerpo = "Nombre: $nombre\nCorreo electrónico: $correo\nTeléfono: $telefono\nEquipo: $equipo\nMensaje: $mensaje";

	// Configurar las cabeceras del correo
	$cabeceras = "From: $correo\r\n";
	$cabeceras .= "Reply-To: $correo\r\n";
	$cabeceras .= "X-Mailer: PHP/".phpversion();

	// Enviar el correo electrónico
	if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
		echo "Mensaje enviado correctamente.";
	} else {
		echo "Error al enviar el mensaje. Por favor, intenta nuevamente.";
	}
} else {
	// Si no se recibieron los datos del formulario, redirigir al usuario a la página de inicio
	header("Location: index.php");
	exit();
}
// Redireccionar a la página de información
header('Location: informacion.php');
exit;
// Crear cookie con tiempo de expiración en 15 minutos
$expiracion = time() + (15 * 60);
setcookie('tiempo_expiracion', $expiracion, $expiracion, '/');

?>
