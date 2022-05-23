<?php 
//Creamos la clase Profesor
    class Profesor {
        //Atributos que son las propiedades del objeto
        public $nombre = 'Marc';
        public $apellido = 'Esteve';
        public $altura = 1.75;
        public $edad = 40;

        // echo $nombre; no funciona

        //Métodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }
    $persona = new Profesor();//Creamos OBJETO. Hacemos una instancia a la clase
    echo gettype($persona) . '<br>';//Muestra tipo "object"
    var_dump($persona); //nos dice todo lo que contiene y de que tipo es todo
    echo '<br>';
    echo 'El nombre del profesor es ' . $persona->nombre . ' ' . $persona->apellido . " con una altura de " . $persona->altura . 'm y una edad de ' . $persona->edad . ' años';
    $persona->hablar("<br>Un cordial saludo");
    echo '<br>';
// Creamos la clase coche
    class coche{
        public $color = "rojo";  
        public function acelera($velocidad){echo $velocidad;}
    }
    $tesla = new coche(); //realizamos una instancia de la clase coche. Esto crea el objeto tesla heredando los atributos y metodos
    echo gettype($tesla);
    echo '<br>';
    echo 'El color del coche es ' . $tesla->color;
    echo '<br>';
    echo 'la velocidad del coche es ' ;
    $tesla->acelera("100km/h");


?>