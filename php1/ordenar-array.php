<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

$dias = array(
        'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
);

rsort($numeros);
sort($meses); //Función del array que queremos ordenar
// rsort($meses); Inverso del array
// rsort($numeros);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php
			foreach($numeros as $numero){
				echo '<li>' . $numero . '</li>';
			}
		?>
		<?php
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?>
		<?php
            echo "sin orden".'<br>';
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
            echo 'orden alfabético' . '<br>';
            sort($dias);
            foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
            echo 'orden inverso'.'<br>';
            rsort($dias);
            foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
	</ul>
</body>
</html>