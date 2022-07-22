<?php

$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
//en el navegador pondré ?id1=2&id2=5
try {
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');
	$resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id1 OR id=$id2");

    foreach($resultados as $fila){
		echo $fila['id'] . ' - ' . $fila['nombre'] . "<br />";
	}

}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>