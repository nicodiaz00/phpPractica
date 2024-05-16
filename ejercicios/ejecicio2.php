<?php
//Realice un programa que solicite base y altura y calcule la superficie de un triángulo
//a. Ejemplo BASE=10, ALTURA = 2 , entonces RESULTADO = 10

echo"Ingrese la base: ";
$base = trim(fgets(STDIN));
echo "Ingrese altura: ";
$altura =trim(fgets(STDIN));

$resultado= $base * $altura;

echo "la superficie es: " .$resultado;



