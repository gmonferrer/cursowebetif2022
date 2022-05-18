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

$mes = 'Diciembre';

switch($mes){if (case 'Diciembre' or case=Enero else)
			$saludo="Feliz Navidad!";
	
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
echo $saludo;
# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>