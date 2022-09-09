<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos.css">
	<title>Paginación</title>
</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>

		<section class="articulos"> 
			<!-- son los artículos, se dividen con una linea que está en estilos-->
			<ul>
				<!-- la variable artículos es el array, el foreach recorre la array y va poniendo 1. artículo1 -->
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . '.- ' . $articulo['articulo']; ?></li>
				<?php endforeach; ?>
			</ul>
		</section>

		<div class="paginacion"> 
			<ul>
			<!-- es lo de abajo -->
				<!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
				<?php if($pagina == 1): ?>
					<!-- &laquo muestra lo de la flecha hacia la izquierda -->
					<li class="disabled">&laquo;</li>
					<!-- cuando el disabled no le pongo el enlace, lo otro solo es el estilo del cursor -->
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?>


				<!-- Ejecutamos un ciclo para mostrar los númros de las paginas, no las flechas -->
				<?php 
				// la variable numeropaginas es el total de paginas
				//la class active es naranja, pero con el hover se vuelve azul
					for($i = 1; $i <= $numeroPaginas; $i++){
						if ($pagina === $i) {
							// simplificando a tope echo<li>$i</li>
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						} else {
							// sale en negro
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}
				 ?>
				<!-- La variable página es donde nos encontramos ahora -->
				<!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
				<?php if($pagina == $numeroPaginas): ?>
				<!-- &raquo muestra lo de la flecha hacia la derecha -->	
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
					
			</ul>
		</div>
	</div>
</body>
</html>