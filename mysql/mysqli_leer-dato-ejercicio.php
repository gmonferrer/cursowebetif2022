<?php
// Realizamos una conexion a la base de datos.
$conexion = new mysqli('localhost', 'root', '', 'prueba_mysqli');

// Nos retorna un codigo de error o si todo esta bien regresa 0.
// echo $conexion->connect_errno;

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	//$id = isset($_GET['id']) ? $_GET['id'] : 1; // si descomento esta y la siguiente puedo poner en el navegador ? id=2
	//$sql = "SELECT * FROM usuarios WHERE id = $id"; 
	$sql = "SELECT * FROM ejerciciocreate";
	$resultado = $conexion->query($sql);
	
	if($resultado->num_rows){
		// echo '<pre>';
		// var_dump($resultado->fetch_assoc()); // aquí me sale el array y solo con el primer valor
		// echo $resultado->fetch_assoc()['nombre'];//con el fetch salta y entonces me da solo el nombre, así entendemos el fetch
		// echo '</pre>';

		while($fila = $resultado->fetch_assoc()){ 
			echo $fila['ID'] . ' - ' . $fila['nombre'] . ' - ' . $fila['edad']. '<br />';
		}

	} else {
		echo 'No hay datos';
	}
}