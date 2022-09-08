<?php 

	$errores = '';
	$enviado = false;

	//Si hemos hecho clic sobre el boton:

	if (isset($_POST['submit'])) {
		//guardamos el valor asignado por el usuario en la id
		$id = $_POST['id'];

		//Error si no hay "id" seleccionada
		if (empty($id)) {
			$errores .= 'Por favor selecciona una id <br />';
		}
// si han dado una id se envía el formulario
		if(!$errores){
			$enviado = 'true';
		}

	}

	require 'index.view.php';
	//a partir del envio del formulario se conecta y envia a la bbdd la id, conectamos con la api

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', '');

			//Buscar datos del formulario
			//la variable conexion y el statement podemos poner el nombre que queramos
			$statement = $conexion->prepare('SELECT * FROM formulario WHERE id = :id');
			$statement->execute(
				array(':id'=> $id)
			);
			//recibimos otro paquete de información

			//en la siguiente linea es cuando se guarda el resultado de la instrucc sql en la variable resultados
			//el fetch me lee toda la fila de la consulta
			//guardamos el registro
			$resultados = $statement->fetch();
			
			//como muestro los datos
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