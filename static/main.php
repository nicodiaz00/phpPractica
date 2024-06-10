<?php
include_once ('Car.php');

$carA = Car::crearAuto();

$carB = Car::crearAuto();

echo Car::getCantidad();

echo $carA->getId();