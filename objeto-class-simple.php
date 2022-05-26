<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name="pepito";
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
echo $apple->name; //muestra pepito
$apple->set_name("Apple");

echo $apple->name;//muestra Apple

$orange = new Fruit();
$orange->set_name("Orange");
echo $orange->name; //muestra orange
echo "<br>Mi fruta preferida es la " . $orange->name;
?>
 
</body>
</html>
