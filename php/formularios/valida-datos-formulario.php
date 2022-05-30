<?php

$errorNombre=''; //aquí guardaremos los errores
$errorCorreo='';


if (isset($_POST['submit'])) { //si se ha enviado (es decir, si submit tiene valor)guárdame el valor de nombre y email en sus variables
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];

    // echo 'Tu nombre es ' . $nombre . '<br>';
    // echo 'Tu correo es ' . $email . '<br>';
    // Hasta aqui el usuario podria inyectar código <strong>Marc</strong>
    // Incluso podrian estar vacios los campos
    // Para validar los datos correctos debemos limpiar el código que recibimos

    if (!empty($nombre)) { //si no está vacio =isset
        $nombre= trim($nombre); //quita espacios por delante y por detras
        $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
        $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código

        //$nombre=filter_var($nombre, FILTER_SANITIZE_STRING); //Filtros de "saneamiento" retira caracteres que no queremos

        echo 'Tu nombre es ' . $nombre . '<br>';
    } else {
        $errorNombre= ' Por favor escribe un nombre <br>'; //si no tiene valor nombre, voy concatemando en la variable errores (el . concatena)
        
    }
    echo '<br>';
    if (!empty($email)) { //si tiene valor
        $email=filter_var($email, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de "validación" del correo
            $errorCorreo=' Por favor escribe un correo válido <br>';
        } else {
            echo 'Tu correo es ' . $email . '<br>';
        }
    } else {
        $errorCorreo= 'Por favor escribe un correo <br>';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Valida datos del formulario</title>
    <style>
        .error{color:red;}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> 
    <!-- htmlspecialchars hace que no me lo interprete html. [PHP_SELF] significa la ruta exacta del archivo. Ahora nos enviamos los datos a nosotros mismos -->
    <!-- Como utilizamos el método post, lo guardará en la variable $_POST -->
        <input type="text" name="nombre" placeholder="Escribe aquí el nombre" id="">
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errorNombre; ?></div>
        <?php endif; ?>
        <br>
        <input type="text" name="email" placeholder="Danos tu correo" id=""> <!--Tipo normal, contype="email ya te controla el"-->
        <?php if(!empty($errorCorreo)): ?>
            <div class="error"><?php echo $errorCorreo; ?></div>
        <?php endif; ?>

        
            
        <input type="submit" name="submit" value="Enviar formulario" >
    </form>
</body>
</html><div class="error"><?php echo $errorCorreo; ?></div>