<?php 

$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');
	//Aquí no se ejecuta si hay algo más que un ?id=3 
	//mientras que en el fichero anterior de prueba_id sí
	$statement->execute(
		array(':id'=> $id)
	);

	$resultados = $statement->fetch();
	echo "<pre>";
	print_r($resultados);
	echo "</pre>";

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>