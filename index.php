<?php
require 'vehicle.php';
require 'highway.php';
require 'motorway.php';
require 'residentialway.php';
require 'pedestrianway.php';



$car = new Vehicle('red', 4);

var_dump($car);

$a4 = new MotorWay();

var_dump($a4);


$a4->addVehicle($car);
var_dump($a4);

$vroum = new Vehicle('blue', 4);
$truck = new Vehicle('yellow', 12);

$a4->addVehicle($vroum);
var_dump($a4);
$a4->addVehicle($truck);
var_dump($a4);

echo "<br><hr><br>";

$velo = new Bicycle('green', 1);
$skate = new Skateboard('black');

$route = new PedestrianWay();

$route->addVehicle($velo);
$route->addVehicle($skate);
var_dump($route);
