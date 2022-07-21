<?php
$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');
// si hay errores realiza un die:
if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	//$statement es el nombre que le hemos puesto, puede ser cualquiera
	$statement = $conexion->prepare("UPDATE `usuarios` SET `nombre` = 'Superman' WHERE `usuarios`.`id` = 3");

	// Ejecutamos la sentencia.
	$statement->execute();
	echo 'Se ha actualizado correctamente la bbdd';
}