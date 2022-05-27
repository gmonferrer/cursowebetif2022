<?php 

$mes = 'Agosto';
$verdadero = true;
$saludo = '';

// if ($verdadero) {
// 	echo "Verdadero";
// } else {
// 	echo "Falso";
// }

if (($mes == 'Diciembre') && ($verdadero==true)) {
	$saludo="Feliz Navidad";
} else if($mes == 'Enero'){
	$saludo="Feliz Año Nuevo";

} else if ($mes == 'Junio'){
    $saludo="Feliz San Juan";
} else if ($mes == 'Julio'){
    $saludo="Feliz Julio";
} else if($mes == 'Agosto'){
	$saludo="Feliz vacaciones";
} else {
	$saludo="El mes no tiene celebracion";
}

echo $saludo . '<br>';
$x = "gemma";
echo "me encanta $x";
 ?>