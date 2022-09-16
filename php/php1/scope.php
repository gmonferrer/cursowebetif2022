<?php
// scope significa alcance

$numero = 7; //Variable global = acceso desde cualquier parte del código excepto dentro de funciones
echo $numero; //dará 7
// function mostrarNumero(){
// 	$numero = 13;
// 	echo $numero; //Dará un error, ya que no encuentra $numero dentro de la función si no hay la línea 7. Dará 13
// }

// mostrarNumero(); // Dará un error, ya que no encuentra $numero dentro de la función
// echo $numero; //dará 7

# Para usarla dentro de la función pasar como parámentro
// function mostrarNumero($numero){
// 	echo $numero;
// }
// mostrarNumero(13);
// echo $numero;

# Lo mismo si definimos en la función y queremos utilizarla fuera
// function mostrarNumero(){
// 	$numero = 10;
// }
// mostrarNumero(); // aquí no se muestra nada, le ha asignado un 10 solo dentro de la función
// echo $numero; //No se puede acceder porque la variable esta dentro de la función, necesitaremos el "return"

function mostrarNumero(){
	$numero = 10;
	return $numero; //guarda el valor en la llamada a la función
}
// function mostrarNumero(){
// 	$numero = 10;
// 	echo $numero; //guarda el valor en la llamada a la función
// }

echo mostrarNumero(); // da 10
$numero=mostrarNumero(); //le asigna 10 a la variable numero
echo $numero;//10



#RESUMEN:
//1. Por parámetro para entrar la variable en la función
//2. Con el return para sacar la variable de la función

?>