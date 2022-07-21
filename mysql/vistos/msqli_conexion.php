<?php

$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');
//en vez de localhost puedo poner el 127...

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	// Codigo
	echo 'conexión correcta a nuestra ddbb';
}