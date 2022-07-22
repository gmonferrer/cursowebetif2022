<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios VALUES (null, "Alex")');
	$statement->execute();
	echo ' Datos insertados correctamente<br>';

//ejercicio de incluir un UPDATE Y UN DELETE
//deberíamos haber puesto 3 variables diferentes en vez de la $statement para todas las instrucciones

	$statement = $conexion->prepare("UPDATE `usuarios` SET `nombre` = 'Marcos' WHERE `usuarios`.`id` = 18");
	$statement->execute();
	echo ' Datos actualizados <br>';

	
	$statement = $conexion->prepare('DELETE FROM usuarios WHERE id=14');
	$statement->execute();
	echo ' Datos borrados <br>';


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>