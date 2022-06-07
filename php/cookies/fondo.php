<?php
setcookie('background-color', 'lime', time() + 3, '/');
 //Crea cookie de nombre color, valor red, esto / significa el dominio raíz, en nuestro caso localhost
//expiración  1 mes
//setcookie('colormes', 'red', time() -1000000000000, '/'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color de fondo</title>
</head>
<body>
    <h1>Creación cookie color de fondo</h1>
    <p>Cookie de nombre 'background-color' y valor 'lime'</p>
	<a href="texto.php">texto.php</a>
</body>
</html>