<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>Prueba formulario</h1>
    <form action="" method="get"> 
    <!-- le decimos donde van los datos con action -->
        <p> NOMBRE: </p>
        <input type="text" placeholder="Escribe tu nombre" name="nombre" id="">
        <br>
        <input type="radio" name="sexo" value="mujer" id="radio1">
        <label for="radio1">Mujer</label>
        <input type="radio" name="sexo" value="hombre" id="radio2">
        <label for="radio2">Hombre</label>
        <!-- Notar que los inputs de las opciones han de tener el mismo name -->
       
        <br>
        <select name="fecha" id="">
            <option value="2025">2025</option>  
            <!-- value lo recibimos con PHP -->
            <option value="2026">2026</option>
            <option value="2027">2027</option>
        </select>
        <br>
        <input type="checkbox" name="terminos" id="checkterms" value='ok'>
        <label for="checkterms">Aceptar términos</label>
        <br> 
        <input type="checkbox" name="terminos" id="checkterms2" value='ok2'>
        <label for="checkterms2">Aceptar condiciones</label>
        <br> 

        <input type="submit" value="Enviar">
    </form> 
    <!-- <form action="" method="get"></form> -->
</body>
</html>