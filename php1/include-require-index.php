<?php 
$numero1 = 10;

function suma($numero, $numero2){
	return $numero + $numero2;
}

include 'include-require-vista.php'; //Warning, cuando el archivo "incluido" no es importante
require 'include-require-vista.php'; //Fatal error, cuando el archivo es indispensable, sino el resto de la página no deberia visualizarse

// include_once 'include-require-vista.php' //Solo una vez
// require_once 'include-require-vista.php' //Solo una vez

/*
include y require hacen lo mismo, 
pero con include el resto de la página se ejecuta, 
con require es obligatorio que se realice bien para que el resto del código de la página se ejecute
*/
echo '<b>Hola</b>';
$numero1 = 20;
include 'include-require-vista.php'; 

?>