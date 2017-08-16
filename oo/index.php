<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari", "Red");
$ferrari->engine = 488;
$ferrari->doors = 2;

$mustang = new Car("Mustang", "Dark");

$mustang->engine = 300;
$mustang->doors = 4;

echo $ferrari->brand.'<br>';
echo $ferrari->color.'<br>';
echo $ferrari->engine.'<br>';

echo $mustang->getEngine("hp");
echo "<br>";
echo $mustang->getBrand();
echo "<br>".$mustang->doors;

$harley = new Motorcycle("Harley Davidson","Black");

$harley->engine = "4000";

echo "<br>".$harley->getEngine("Cylinder capacity")."<br>";
echo $harley->color;