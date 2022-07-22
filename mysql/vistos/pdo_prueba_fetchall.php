<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios');
	$statement->execute();

	$resultados = $statement->fetchAll();
	foreach ($resultados as $usuario) {
		echo $usuario['id']. ' - ' . $usuario['nombre'].'<br>';
	}

}catch(PDOException $e){ //si hay algún problema va al catch
	echo "Error: " . $e->getMessage();
}

?>