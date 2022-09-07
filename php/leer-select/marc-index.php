<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];

		//Error si no hay "id" seleccionada
		if (empty($id)) {
			$errores .= 'Por favor selecciona una id <br />';
		}

		if(!$errores){
			$enviado = 'true';
		}

	}

	require 'index.view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

			//Buscar datos del formulario
			$statement = $conexion->prepare('SELECT * FROM formulario WHERE id = :id');
			$statement->execute(
				array(':id'=> $id)
			);

			$resultados = $statement->fetch();
			
			if($resultados){
				echo "<p style='text-align:center'> El registro es:</br> ";
				echo "ID: " . $resultados['id'] . ' - ' . $resultados['nombre']. ' - ' . $resultados['correo'] ;
				echo "</p>";
			} else {
				echo "<p style='text-align:center'>No hay ese registro</p>";
			}

			
			

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}


?>