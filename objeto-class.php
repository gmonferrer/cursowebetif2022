<?php

    class Persona {
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Métodos
        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre; //aquí el this se refiere lo que llama a la función
            $this->apellido[] = $apellido;
        }
        public function mostrar(){
            for($i=0; $i<count($this->nombre); $i++){
                $this->formato($this->nombre[$i], $this->apellido[$i]);
            }
        }
        public function formato($nombre, $apellido){
            echo 'Nombre: ' . $nombre . '- Apellido: ' . $apellido . '<br>';
        }
    }

    $persona = new Persona();
   
    $persona->guardar('Jose', 'Fernández');
    $persona->guardar('Arnau', 'Garcia');
    $persona->guardar("Pedro", "Ximenez");
    $persona->mostrar();
    echo '<br>';
    $marc=new Persona();
    $marc->guardar('Marc', 'Esteve');
    $marc->mostrar();
   
    echo '<br>';
    var_dump($persona);
    echo '<br>';
    var_dump($marc);
   

?>