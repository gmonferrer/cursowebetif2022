<?php
    //Codi PHP
    $semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'); //variable array

    class Impressora {
        // esta clase tiene 4 atributos(variables) y 1 método (función)
        //Atributs
        public $tinta = true; //2 atributos booleanos
        public $paper = true;
        public $tamany = 'DINA4'; // 2 atributos string
        public $color = 'negre';
        //Metodes
        public function imprimeix($tinta,$paper,$tamany,$color){ //este método tiene 4 argumentos. Faltaba añadir el cuarto, color
            if ($tinta && $paper){      //esto significa si tinta es true y papel también haz...
                echo 'Es pot imprimir en ' . $tamany . ', en color ' . $color; //puedo ponerlo aquí porque la función tiene argumentos, si no, no podría
            }
            else{   //en caso contrario
                echo 'Falta tinta o paper';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Imprime días de la semana y una frasecilla</h1>
    <!-- Codi PHP-->

    <?php
    sort($semana);  //ordenamos la array semana

			foreach($semana as $dia){   //foreach recorre toda la array
				echo '<li>' . $dia . '</li>';
			}

    $imprime = new Impressora(); //creo el objeto imprime de la class Impressora, por tanto tendrá sus atributos y funciones
    echo '<br>';
    
    $imprime->imprimeix(1,1,"DINA4", "negre"); //llamo a func y le doy valores. No hacía falta el echo pq los contiene la función
    //echo $imprime->imprimeix(1,0,"DINA4", "negre"); //compruebo que no se cumple el condicional con otros argumentos
		?>
</body>
</html>