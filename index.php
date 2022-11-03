<?php
require "Vehicle.php";

$car = new Car("red", 4, "electric");
$cycle = new Bicycle("red", 1);
$skate = new SkateBoard("blue", 4);

$car->switchOn();

$car->switchOff();


$cycle->setCurrentSpeed(11);
$cycle->switchOn();
