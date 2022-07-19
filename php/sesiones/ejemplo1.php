<?php

session_start(); //inicio sesión o continuo sesión

echo 'Bienvenido a la página de ejemplo #1';

$_SESSION['color']  = 'verde';
$_SESSION['animal'] = 'gato';
$_SESSION['instante']   = time(); // hora actual
echo '<br>Con la sesión iniciada vale  ';
	print_r($_SESSION);

// Funciona si la cookie de sesión fue aceptada
echo '<br><a href="ejemplo2.php">Ejemplo 2</a>';
echo '<br>';
echo ceil(-4.1);

// O quizás pasar el id de sesión, si fuera necesario
// echo '<br /><a href="ejemplo2.php?' . SID . '">página 2</a>';
?>