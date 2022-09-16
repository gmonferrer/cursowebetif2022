<?php 

$edad = 18;
//función isset() revisa si una variable tiene valor

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
echo $edad;
//if condición ? si la condición es true accióna: si es falso acción 2

// lo mismo de manera más larga, por eso lo de arriba se llama atajo de if

// if (isset($edad)) {
// 	$edad = $edad;
// } else {
// 	$edad = 'El usuario no establecio su edad';
// }

// echo 'Edad: ' . $edad;

?>