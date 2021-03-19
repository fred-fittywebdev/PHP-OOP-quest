<?php
require_once 'Bicycle.php';
require_once 'Car.php';

//insatnces of bike
$bike = new Bicycle('red');

// new instance ofa bike to test the code
$bike2 = new Bicycle('black');

// instances of car
$flash = new Car('blue', 2, 'fuel');
$martin = new Car('green', 4, 'diesel');

//bike
echo '<strong>Vélo numéro 1 </strong><br>';
echo $bike->forward();
echo '<br> Le vélo va à ' . $bike->getCurrentSpeed() . 'km/h.' . '<br>';
echo $bike->brake();
echo '<br> Le vélo va à ' . $bike->getCurrentSpeed() . 'km/h.' . '<br><br>';
echo '<strong>Vélo numéro 2 </strong><br>';
echo $bike2->forward();
echo '<br> Le vélo va à ' . $bike2->getCurrentSpeed() . 'km/h.' . '<br>';
echo $bike2->brake();
echo '<br> Le vélo va à ' . $bike2->getCurrentSpeed() . 'km/h.' . '<br><br>';

echo '<strong>Voiture 1 </strong><br>';
// car
echo $flash->start();
echo '<br> La voiture va à ' . $flash->getCurrentSpeed() . 'km/h.' . '<br>';
echo $flash->forward();
echo '<br> La voiture va à ' . $flash->getCurrentSpeed() . 'km/h.' . '<br>';
echo $flash->brake();
echo '<br> La voiture va à ' . $flash->getCurrentSpeed() . 'km/h.' . '<br><br>';

echo '<strong>Voiture 2 </strong><br>';
echo $martin->start();
echo '<br> La voiture va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br>';
echo $martin->forward();
echo '<br> La voiture va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br>';
echo $martin->brake();
echo '<br> La voiture va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br>';
