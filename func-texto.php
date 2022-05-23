<?php 

$texto = 'Adeu Andreu';


echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar código fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar código <b>Hola</b> o peor aun, código Javascript que se pueda ejecutar
echo trim($texto) . '<br>'; //Quita los espacios al principio y al final
echo strlen($texto). '<br>'; //Cuenta los caracteres totales del string
echo substr($texto, 0, 4) . '<br>'; //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
echo strtoupper($texto) . '<br>';//Convierte a mayúsculas
echo strtolower($texto) . '<br>'; //Convierte a minúsculas
echo strpos($texto, 'n') . '<br>'; //Posición del string
echo strrev($texto) . '<br>' ;  //Invierte el texto
$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
echo $nuevoTexto;

?>