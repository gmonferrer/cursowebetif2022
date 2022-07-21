<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');
// si hay errores realiza un die:
if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	//$statement es el nombre que le hemos puesto, puede ser cualquiera
	$statement = $conexion->prepare("UPDATE `ejerciciocreate` SET `nombre` = 'Marcos', `edad` = '38' WHERE `ejerciciocreate`.`ID` = 1");

	// Ejecutamos la sentencia.
	$statement->execute();
	echo 'Se ha actualizado correctamente la bbdd';
}