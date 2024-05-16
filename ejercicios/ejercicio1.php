<?php


//Realize un programa que pida dos valores, los intercambie y los muestre

echo "ingrese valor 1: ";
$valor1 =fgets(STDIN);
echo "ingrese valor 2: ";
$valor2=fgets(STDIN);

$aux = $valor1;
$valor1 = $valor2;
$valor2 = $aux;
echo "el valor 1 ahora es: $valor1 y el valor 2 ahora es $valor2";
