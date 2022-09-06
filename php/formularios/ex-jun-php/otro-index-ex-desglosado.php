<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		
		if (!empty($nombre)) {
			$nombre = trim($nombre);
		} else {
			$errores .= 'Por favor escribe un nombre <br />';
		}

		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor escribe un correo valido <br />';
			}
		} else {
			$errores .= 'Por favor escribe un correo <br />';
		}

		
		if(!$errores){
			// $enviar_a = 'tunombre@tuempresa.com';
			// $asunto = 'Correo enviado desde miPagina.com';
			// $mensaje_preparado = "De: $nombre \n";
			// $mensaje_preparado .= "Correo: $correo \n";
			// $mensaje_preparado .= "Mensaje: " . $mensaje;

			//mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true';
		}

	}

	require 'index.view-ex.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

			//Insertar datos del formulario
			$statement = $conexion->prepare('INSERT INTO formulario VALUES (null, :nombre, :correo');
			$statement->execute(
				array(':nombre'=> $nombre, ':correo'=> $correo)
			);

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}


?>