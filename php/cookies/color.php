<?php
setcookie('color', 'red', time() + 60 * 60 * 24 * 30, '/'); //Crea cookie de nombre color, valor red, esto / significa el dominio raíz, en nuestro caso localhost
//expiración  1 mes
setcookie('colormes', 'red', time() -1000000000000, '/'); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color red</title>
</head>
<body>
    <h1>Creación cookie color</h1>
    <p>Cookie de nombre 'color' y valor 'red'</p>
	<a href="texto.php">texto.php</a>
    <a href="cookies-index.php">cookies-index.php</a>
</body>
</html>