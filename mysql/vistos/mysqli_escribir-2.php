<?php

$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

if ($conexion->connect_errno){//connet-errno es una función que te dice si hay errores con la conexión
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "INSERT INTO usuarios(id, nombre) VALUES (null, 'Frank'),(null, 'Gilberto')";
	//hasta aquí no se ha ejecutado nada, solamente se ha guardado la instrucción
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows;
	}
}