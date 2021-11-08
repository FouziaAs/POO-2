<?php
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('red', 4, 'fuel', 20);
echo $truck->isFull();
var_dump($truck);
?>