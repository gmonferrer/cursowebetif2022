<?php
	print_r($_SESSION); //me da un warning porque la había cerrado
	//session_start();
	// session_destroy();
	echo '<br>Con la sesión cerrada vale  ';
	print_r($_SESSION);
	session_start(); // al continuarla me pone los valores de color, animal e instante
	$_SESSION['nombre'] = 'Marc';
	echo '<br>Con la sesión iniciada vale  ';
	print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>	
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
	<h1>Página de Inicio-index.php</h1>
	<p>Has cargado una nueva sesión</p>
	<a href="pagina2.php">Ir a la página 2</a>
	<br>
	<a href="cerrar.php">Cerrar sesión</a>
</html>	
</body>
</html>
