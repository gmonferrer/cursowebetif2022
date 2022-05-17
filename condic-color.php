<?php

// if (condicion){
// 	// Instrucciones de condicionales
// }

/* Operadores de comparacion:

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion

*/

/* Operadores de logicos:

&& , and - Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condicion
xor - Evalua que se cumpla una y solo una condicion

*/

$color= 'azul';
?>

<?php if($color == 'azul'){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Color escogido: azul</h1>
	</body>
	</html>
<?php } ?>

<?php if($color == 'rojo'){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Color escogido: rojo</h1>
	</body>
	</html>
<?php } ?>
