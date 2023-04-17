<!DOCTYPE html>
<html>
  <head>
    <title>Enrolacion</title>
  </head>
  <body>
    <h2>Iniciar sesión</h2>
    <form action="enviar.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br><br>
      <label for="nickname">NickName:</label>
      <input type="text" id="nickname" name="nickname" required><br><br>
      <label for="equipo">Equipo:</label>
      <input type="text" id="equipo" name="equipo" required><br><br>
      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" required><br><br>
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" pattern="^\+56\s\d{1,2}\s\d{8}$" placeholder="+56 9 xx xxxxxxx" required><br><br>
      <input type="submit" value="Enviar">

  </form>
    <div id="countdown"></div>
    <script>
      var timeleft = 30; // segundos restantes (15 minutos)
      var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdown").innerHTML = "Tiempo restante: " + Math.floor(timeleft / 60) + "m " + (timeleft % 60) + "s ";
        if(timeleft <= 0) {
          clearInterval(downloadTimer);
          window.location.href = "timeout.php"; // redireccionar a otra página
        }
      }, 1000);
    </script>
  </body>
</html>
