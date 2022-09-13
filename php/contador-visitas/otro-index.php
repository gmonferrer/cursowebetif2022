<?php 
function contar_usuarios(){
	$archivo = 'contador.txt'; //esto es un string, no es el archivo, es la URL del archivo como está en la misma carpeta, ok

	if ( file_exists($archivo) ) {
		$cuenta = file_get_contents($archivo) + 1;
		file_put_contents($archivo, $cuenta); //rellena el fichero con 1+1

		return $cuenta; //para que el echo de la función me muestre el número
	} else {
		file_put_contents($archivo, 1);
		return 1;
	}
}
function reiniciar(){
	$archivo ='contador.txt';
	file_put_contents($archivo, 0);
	return 0;

}
require 'index-view.php';
?>
