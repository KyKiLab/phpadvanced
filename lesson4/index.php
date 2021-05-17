<?php

use phpadvanced\lesson4\Car as Car;

include '../vendor/autoload.php';

$car = new Car();

echo $car->printState();
$car->start();
echo "Start...\n\r" . $car->printState();

$car->turnOnHeadlights();
echo "Turn on headlights...\n\r" . $car->printState();

$car->turnOffHeadlights();
echo "Turn off headlights...\n\r" . $car->printState();

for ($i=0; $i<15; $i++){
    echo $car->up();
}

for ($i=0; $i<15; $i++){
    echo $car->down();
}

$car->stop();
echo "Stop...\n\r" . $car->printState();