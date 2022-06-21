<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
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
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
			$errores .= 'Por favor escribe un correo valido <br />';
		}
	} else {
		$errores .= 'Por favor escribe un correo <br />';
	}

	if(!$errores){
		// $enviar_a = 'gemma.monferrer@etif.es';
		// $asunto = 'Correo enviado desde miPagina.com';
		// $mensaje_preparado = "De: $nombre \n";
		// $mensaje_preparado .= "Correo: $correo \n";
		
		// mail($enviar_a, $asunto, $mensaje_preparado);
		$enviado = 'true';
	}

}

require 'index.view-ex.php';
echo '<br>';
print_r($_POST);

?>