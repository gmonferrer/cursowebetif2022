<?php

// print_r($_SERVER);
// echo '<br>';
// echo '<br>';
// var_dump($_SERVER);
if ((!$_GET) && (!$_POST)){
    header('Location: http://localhost/cursowebetif2022/php/formularios/formulario.php'); //Carpeta y archivo para rellenar el form correcto
}

#1. REVISAR DE QUE FORMA SE ENVIAN LOS DATOS
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo 'Se ha enviado por GET';
// } else {
//     echo 'Se ha enviado por POST';
// }
// echo '<br>';

// #2. REVISAR SI SE HA ENVIADO EL FORMULARIO COMPROBANDO SUBMIT, metodo post
// echo '<br>';
// echo '<br>';
// if (isset($_POST['submit'])) {
//     echo 'Se han enviado los datos correctamente por POST por el primer formulario <br>';
//     print_r($_POST['submit']);
//     echo '<br>';
//     print_r($_POST);
// }
// if (isset($_POST['submit2'])) {
//     echo 'Se han enviado los datos correctamente por POST del segundo formulario <br> ';
//     print_r($_POST['submit2']);
//     echo '<br>';
// }
// echo '<br>';
// if (isset($_GET['submit'])) {
//     echo 'Se han enviado los datos correctamente por GET desde el primer formulario <br>';
//     print_r($_GET['submit']);
//     echo '<br>';
//     print_r($_GET);
// }
// if (isset($_GET['submit2'])) {
//     echo 'Se han enviado los datos correctamente por GET desde el segundo formulario <br> ';
//     print_r($_GET['submit2']);
//     echo '<br>';
// }

#3. EJERCICIO REVISAR SI SE HA ENVIADO POR POST O GET Y ADEMÁS EN EL FORMULARIO COMPROBAMOS QUE SUBMIT
$metodo= $_SERVER['REQUEST_METHOD'];
if ($metodo == 'GET') {//Enviado mediante GET
    if (isset($_GET['submit'])) {
        echo 'Se han enviado los datos correctamente en el formulario 1, mediante GET <br>';
    }
    if (isset($_GET['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante GET ';
    }
    echo 'Valores del get ';
    print_r($_GET);
    echo print_r($_POST); //VACIO
} else { //Enviado mediante POST
    if (isset($_POST['submit'])) {
        echo 'Se han enviado los datos del primer formulario correctamente, mediante POST <br>';
        print_r($_POST['submit']);
        echo '<br>';
        echo 'Valores del POST ';
        print_r($_POST);
    }
    if (isset($_POST['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante POST <br>';
        print_r($_POST['submit2']);
    }
    echo '<br>';
    echo 'Valores del post ';
    echo print_r($_GET); //VACIO
    print_r($_POST);
}

?>