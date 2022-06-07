<?php 

session_start();
print_r($_SESSION);
echo '<br>';
session_destroy();
print_r($_SESSION);
?>

Has cerrado sesión

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
</head>
<body>
    <br>
<a href="sesion-index.php">Abrir sesión</a>
<br>
<a href="pagina2.php">Ir a la pagina2</a>
</html>	
</body>
</html>