<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Agosto';

switch($mes){
	case 'Diciembre':
		$saludo="Feliz Navidad!";
	break;
	case 'Enero':
		$saludo= "Feliz Año Nuevo";
	break;
    case 'Junio':
		$saludo= "Feliz verbena";
	break;
    case 'Agosto':
		$saludo= "Felices vacaciones";
	break;
	default:
		$saludo= "En este mes no se celebra nada";
	break;
}
echo $saludo . '<br>';
$saludo="";

    //prompt function
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type the hour";
    //$hora= prompt($prompt_msg);

	$answer = prompt($prompt_msg);

      

if ($answer>=15 and $answer<=20){
	$saludo = "Estás en ETIF";
} else {
	$saludo = "No estás en ETIF";
}

$output_msg = $saludo;
    echo($output_msg);


# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>