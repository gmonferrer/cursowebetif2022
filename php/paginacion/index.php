<?php 

// Nos conectamos a la base de datos y si no die para que no nos muestre un montón de errores
try {
	$conexion = new PDO('mysql:host=localhost;dbname=curso_paginacion', 'root', '');
} catch (PDOException $e) {
	echo 'ERROR: '. $e->getMessage();
	die();
}

// Establecemos el numero de pagina en la que el usuario se encuentra.
# Esto lo hacemos por el metodo GET, si no hay ningun valor entonces le asignamos la pagina 1, si no ya tiene un valor
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

// Establecemos cuantos articulos por pagina queremos cargar.
$postPorPagina = 5;

// Revisamos desde que articulo vamos a cargar, dependiendo de la pagina en la que se encuentre el usuario.
# Comprobamos si la pagina en la que esta es mayor a 1, sino entonces cargamos desde el articulo 0.
# Si la pagina es mayor a 1 entonces hacemos un calculo para saber desde que post cargaremos.

//aqui inicio calcula el primer artículo que muestra en cada página 2*3-3 = 3 (que es el 4 porque la posicion 0 existe)

//$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

//intento hacer que me muestre del artículo más reciente al más antiguo:
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0 ;

// Preparamos la consulta SQL, articulos es el statement, está conectado con la misma variable del otro fichero view
$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM articulos
	LIMIT $inicio, $postPorPagina
	"); //limitamos desde el inicio a los articulos por pagina

// Ejecutamos la consulta
$articulos->execute();
$articulos = $articulos->fetchAll();

// Comprobamos que haya articulos, sino entonces redirigimos a la pagina 1.
//En el navegador pongo pagina 6 por ejemplo y entonces regresa a la 1
if (!$articulos) {
	header('Location: http://localhost/cursowebetif2022/php/paginacion/');
}

// Calculamos el total de articulos, para despues conocer el numero de paginas de la paginacion.
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total'); //me guarda el numero de articulos
$totalArticulos = $totalArticulos->fetch()['total'];
// es el numero de artículos en una página, en la última por ejemplo serán menos
//como antes habíamos calculado el total de las ROWS, aunque lo limite,  ahora me las encuntra


// Calculamos el numero de paginas que tendra la paginacion.
# Para esto dividimos el total de articulos entre los post por pagina
$numeroPaginas = ceil($totalArticulos / $postPorPagina);

require 'index.view.php';

?>