<?php
require_once __DIR__ .  '/Food.php';
require_once __DIR__ .  '/Costumer.php';


$ciccia = new Food("carne", "12.30", "carne per cani molto buona", "pollo");
$myCard = new CreditCard(123544657687967564, 222, 2029);
$kukku = new Costumer("kukku", "kukkunino", 26, $myCard,false,"no");

echo "<pre>";

    var_dump($ciccia);

echo "</pre>";

echo "<pre>";

    var_dump($myCard);

echo "</pre>";

echo "<pre>";

    var_dump($kukku);

echo "</pre>";

?>

