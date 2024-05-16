<?php
/*
 * Realizar un programa que permita calcular el volumen de un silo de base circular,
preguntando al usuario, el diametro y la altura
 */

echo "Ingrese el diametro: ";
$diametro = intval(fgets(STDIN));
echo "Ingrese la altura: ";
$altura =intval(fgets(STDIN));
$radio= $diametro /2;

$volumen = (($radio* $radio) * pi()) * $altura;

echo "el volumen es: " .$volumen;
