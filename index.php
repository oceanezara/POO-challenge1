<?php

require_once 'bicycle.php';
$bike = new Bicycle('blue', 24);

var_dump($bike);

echo '<br/>';

require_once 'car.php';
$car = new Car('red', '5', 'gas');

var_dump($car);


echo '<br/>';

echo $car -> start();
echo '<br/>';
echo $bike -> forward();
echo '<br/>';
echo $car -> forward();
echo '<br/>';
echo $car -> brake();
