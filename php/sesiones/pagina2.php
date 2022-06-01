<?php 
session_start();

if ($_SESSION) {
	$nombre = $_SESSION['nombre'];
	echo "<h1>Hola $nombre</h1> <p> Tu sesión se ha iniciado correctamente</p>";
} else {
	echo 'No has iniciado sesión';
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Página 2</title>
</head>
<body>
	<h1>Estas en la pagina 2</h1>
	<a href="cerrar.php">Cerrar sesión</a>
    <br>
    <a href="sesion-index.php">Abrir sesión</a>	
</body>
</html>
