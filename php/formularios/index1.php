<?php
$errorNombre=''; //genero 2 errores
$errorCorreo='';

if(!$_POST) { //significa que si no hay datos lo dirijo al formulario
       header('Location: http://localhost/cursowebetif2022/php/formularios/vista.php');//Carpeta y archivo para rellenar el form correcto
}
else {
    if (isset($_POST['submit'])) {
        $nombre=$_POST['nom'];
        $email=$_POST['correu'];
    
        if (!empty($nombre)) {
            $nombre= trim($nombre); //quita espacios delante y detrás
            $nombre=htmlspecialchars($nombre); //Nos convierte los caracteres especiales en entidades html
            $nombre=stripslashes($nombre); // Nos quita \ diagonales para no inyectar código
          
        } else {
            $errorNombre = 'Por favor escribe un nombre <br>';
        }
        if (!empty($email)) {
            $email=filter_var($email, FILTER_SANITIZE_EMAIL);//Filtro de "sanea" el correo, que sea seguro para nosotros
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de "validación" del correo
                $errorCorreo = 'Por favor escribe un correo válido <br>';
            } 
        } else {
            $errorCorreo = 'Por favor escribe un correo <br>';
        }
    }
    }
if(empty($errorNombre) && empty($errorCorreo)) {
    echo '<br>Todos los campos son correctos'; //mensaje de que todos los campos son ok
}
$nombre = $_POST['nom'];
$mail = $_POST['correu'];

require 'vista.php'
?>