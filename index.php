 <?php

require_once 'Animal.php';
require_once 'Ape.php';
require_once 'frog.php';

$sheep = new Animal("shaun");

echo $sheep->get_name(); echo '<br>'; // "shaun"
echo $sheep->get_legs(); echo '<br>';// 2
echo $sheep->get_cold_blooded() ; // false

$sungokong = new Ape("kera sakti");
$sungokong->yell() ;echo '<br>'; // "Auooo"


$kodok = new Frog("buduk");
$kodok->jump() ;echo '<br>'; // "hop hop"
?> 
