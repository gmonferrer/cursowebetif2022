<?php 

/* Operadores Aritméticos:

+	Suma
-	Resta
*	Multiplicación
/	División
%	Resto
**	Exponente

-- */

$numero1 = 10;
$numero2 = 6;

$resultado = $numero1 ** $numero2;
echo gettype($resultado);
echo $resultado;

/* Operadores de Asignación:

=
+=
-=
*=
/=

-- */

$numero = 10;
$numero5 = 5;

// $numero = $numero + $numero5;
$numero += $numero5;
//$numeros += $numero5; //$numeros = $numeros + $numero5;
echo '<br>'. $numero .'<br>'; //15
//$numero = $numero + 7;
$numero += 7;
echo $numero .'<br>'; //22
//$numero = $numero * 3;
$numero *= 3;
echo $numero .'<br>'; //66
// $numero = $numero % 3;
$numero %= 3;
// echo $numero .'<br>'; //0
$numero=10;
// $numero = $numero ** 3; Exponente 10*10*10
$numero **= 3;
// echo $numero; //1000

/* Operadores de Comparación:

==
===
!=, <>
!==
>
<
>=
<=

-- */
$stringNumero ='10'; // String
$numero = 10; //Integer
$numSpaceship = 13;
$variable = 'true';
// echo $numero<=>$numSpaceship;


echo 'Igual valor?: ' . ($stringNumero==$numero) . '<br>'; //true
echo 'Idénticos?: ' .   ($stringNumero===$numero) . '<br>'; //false

if ($stringNumero===$numero) {
    echo 'Idénticos valor y tipo de $stringNumero y  $numero'; }
else{
echo 'No son idénticos';
 }





/* Operadores de Incremento / Decremento:

++$x
$x++
--$x
$x--

-- */

$numero = 10;
echo '<br>' . $numero .  '<br>';
//$numero = $numero + 1;
$numero += 1;
echo 'Valor del $numero++= ' . $numero++ . '<br>';
echo $numero . '<br>';
// echo 'Valor del ++$numero= ' . ++$numero . '<br>';
// echo 'Valor final de $numero= ' . $numero;
# La diferencia es lo que muestra y lo que GUARDA de VALOR
// echo $numero--;
// echo "<br />";
// echo $numero;


/* Operadores de Cadenas:
.
.=

-- */

$texto = 'Cadena de Texto';
$texto .= ' Una segunda Cadena de Texto';

echo $texto . '<br>';

/* Operadores Lógicos:

and, &&
or, ||
xor: 
!

-- */
$numero = 21;

if ($numero >= 10 xor $numero > 20) {
	echo "Se cumple toda la condición<br>";
}
else{
    echo "No se cumple la condición<br>";
}

$bool= false;
if (!$bool) { //NOT FALSE = TRUE
	echo '!$bool se cumple' . $bool;
}
else{
    echo '!$bool no se cumple';
}
echo "<br>";

$array1=['a' =>'Hola', 'b'=> 'dsad'];
$array2=['c' =>'Adiós', 'd' =>'dsadddda'];
$fusion=$array1 + $array2;
#NUEVA FUNCIÓN PRINT_R() muestra en pantalla la suma
print_r($array1 + $array2); // fusiono 2 arrays

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
echo '<br>';
// print_r($x + $y); no le asigna valor

$x = array("a" => "10", "b" => "green");  
$y = array("b" => "green","a" => 10 );  

var_dump($x == $y); //BOOL(TRUE) Me dice que son arrays iguales aunque tenga las claves intercambiadas
var_dump($x === $y); //BOOL(FALSE)

#NUEVA FUNCIÓN EMPTY() vacia la variable?
// Si la variable $user esta vacia empty($user) = TRUE, asiga¡namos a la variable $status = "anonymous"
//echo $status = (empty($user)) ? "anónimo" : "sesión iniciada";
// echo "<br>";

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anónimo" : 'sesión iniciada y $user no esta vacia y es igual a '. $user;

// variable $color es "rojo" if $color does not exist or is null
// echo $color = $color ?? "rojo";

?>