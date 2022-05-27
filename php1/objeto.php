<?php

//Creamos la clase Profesor

class Profesor {

//Atributos

public $nombre = 'Marc';

//echo $nombre; no funciona

//Métodos

public function hablar($mensaje){

echo $mensaje;

}

}

$persona = new Profesor();

// echo $persona->nombre;

// $persona->hablar("Un cordial saludo");

?>