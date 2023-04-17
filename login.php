<?php
$usuarios = array(
	"user" => "123456",
	"usuario2" => "contraseña2",
	"usuario3" => "contraseña3"
);

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $contrasena) {
	// Si el usuario y la contraseña son correctos, redirige al usuario a la página de inicio
	header("Location: inicio.html");
	exit();
} else {
	// Si el usuario y/o la contraseña son incorrectos, muestra un mensaje de error
	echo "Usuario y/o contraseña incorrectos";
}
?>
