<?php

// Comprobar si la cookie existe y si el tiempo de expiración no ha pasado

if (isset($_COOKIE['tiempo_expiracion']) && $_COOKIE['tiempo_expiracion'] > time()) {
  // Calcular tiempo restante
  $tiempo_restante = $_COOKIE['tiempo_expiracion'] - time();

  // Mostrar contador regresivo
  echo 'Tiempo restante: ' . $tiempo_restante . ' segundos.';
} else {
  // Redirigir a página de inicio de sesión
  header('Location: login.php');
  exit;
}
?>
