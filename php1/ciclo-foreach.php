<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre', 'Mesinventado'
);


$marc = array('telefono' => 54743221, 'edad' => 35, 'ciudad' => 'Castelldefels');
$meses[12] ='Mes inventado';
$marc ['transporte']= "moto";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recorrer array y array asociativo también</title>
</head>
<body>
    <h1> Recorre array y array asociativo</h1>
	<ul>
		<?php
			# Con el ciclo foreach podemos recorrer arrays de una manera muy fácil.
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}

			# El ciclo foreach también NOS PERMITE recorrer arrays asosiativos.
			foreach($marc as $dato => $valor){
				echo '<li>' . $dato . ' : ' . $valor . '</li>';
			}

		?>
	</ul>
</body>
</html>