<?php 

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_mysqli', 'root', '');

	//Prepared Statements
	$statement = $conexion->prepare('SELECT * FROM ejerciciocreate');
	$statement->execute();

	$resultados = $statement->fetchAll();
	foreach ($resultados as $usuario) {
		echo $usuario['ID']. ' - ' . $usuario['nombre'] . ' de edad: ' . $usuario['edad'] . '<br>';
	}

}catch(PDOException $e){ //si hay algún problema va al catch
	echo "Error: " . $e->getMessage();
}

?>