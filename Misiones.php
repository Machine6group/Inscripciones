<!DOCTYPE html>
<html>
<head>
	<title>Página de ejemplo</title>

	<div id="countdown"></div>
	<script>
		var timeleft = 60; // segundos restantes (15 minutos)
		var downloadTimer = setInterval(function(){
			timeleft--;
			document.getElementById("countdown").innerHTML = "Tiempo restante: " + Math.floor(timeleft / 60) + "m " + (timeleft % 60) + "s ";
			if(timeleft <= 0) {
				clearInterval(downloadTimer);
				window.location.href = "timeout.php"; // redireccionar a otra página
			}
		}, 1000);
	</script>
</head>
<body>
	<h1>Bienvenido a la página de ejemplo</h1>
	<p>Este es un ejemplo de página con contenido variado, incluyendo texto, fotos y videos. Esperamos que te guste el contenido.</p>
	<!-- Aquí se pueden agregar más elementos HTML, como imágenes y videos -->
	<p>Por favor, haz clic en el botón de abajo para aceptar los términos y condiciones de la página:</p>
	<form action="inicio.php" method="post">
		<button type="submit">Acepto los términos y condiciones</button>
		<button type="submit" formaction="rechazar.php">No acepto los términos y condiciones</button>
	</form>


</body>
</html>
