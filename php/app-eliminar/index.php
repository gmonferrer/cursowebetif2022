<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];

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

			//Actualizar los datos del formulario
			$statement = $conexion->prepare('UPDATE formulario SET nombre="Gabriel" , correo="gab@a.com" WHERE id= :id');
			
			//para eliminar ('DELETE FROM usuarios WHERE id= :id');
			$statement->execute(
				array(':id'=> $id)
			);

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}


?>