<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) { //recibimos los datos en la variable POST (array asociativo)
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	
	if (!empty($nombre)) {
		
		$nombre= trim($nombre); //quita espacios delante y detrás
        $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
        $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código
		
	} else {
		$errores .= 'Por favor escribe un nombre <br />';
	}

	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);//hace las 3 cosas de arriba

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){ //validar que el dato tenga el formato correcto
			$errores .= 'Por favor escribe un correo valido <br />'; //el .= significa errores=errores y concatena el texto
		}
	} else {
		$errores .= 'Por favor escribe un correo <br />';
	}

	if(!$errores){
		// $enviar_a = 'gemma.monferrer@etif.es';
		// $asunto = 'Correo enviado desde el app de formulario de PHP';
		// $mensaje_preparado = "De: $nombre \n";
		// $mensaje_preparado .= "Correo: $correo \n";
		
		// mail($enviar_a, $asunto, $mensaje_preparado);
		//sale este error si no modificamos el localhost:Warning: mail(): Failed to connect to mailserver at "localhost" port 25, verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\cursowebetif2022\php\formularios\ex-jun-php\otro-index-ex.php on line 36
		$enviado = 'true'; //si no hay errores enviado es true, antes era false
	}

}

require 'index.view-ex.php';
// echo '<br>';
// print_r($_POST);

if ($enviado == 'true'){
try { //estableces conexión con bbdd
	$conexion = new PDO('mysql:host=localhost;dbname=heidisql_curso', 'root', ''); //bbdd

	//insertar los datos del formulario con prepare
	$statement = $conexion->prepare('INSERT INTO examen VALUES (null, :nombre, :correo)');
	$statement->execute(array(':nombre'=> $nombre, ':correo'=> $correo)

	);
	echo ' Datos insertados correctamente<br>';

}catch(PDOException $e){
	echo "Error: " . $e->getMessage(); //si no se ha podido conectar con la bbdd
}
}
?>