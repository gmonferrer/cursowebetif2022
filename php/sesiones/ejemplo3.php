<?php

session_start();

echo 'Bienvenido a la página de ejemplo #3 sin niingún enlace<br />';
$color=$_SESSION['color'];
$animal=$_SESSION['animal'];
$instante=date('H:i:s d m Y', $_SESSION['instante']);

//echo $_SESSION['color'] . '<br>';  // verde
//echo $_SESSION['animal']. '<br>'; // gato
//echo date('H:i:s d m Y', $_SESSION['instante']);
echo "Hoy es " . $instante . "El color es " . $color . " y es animal es " . $animal;
// Puede ser conveniente usar el SID aquí, como hicimos en pagina1.php

?>