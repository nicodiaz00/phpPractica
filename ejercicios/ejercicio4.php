<?php
/*
Realizar un programa que pregunte un monto de pesos, y un interes mensual, que
calcule cuanto es el monto al fin del mes con el interese aplicado.
 */

echo "Ingrese el monto: ";
$monto= intval(fgets(STDIN));
echo "Ingrese el interes mensual: ";
$interes =intval(fgets(STDIN));

$calculo = (($monto * $interes) / 100 );
$resultado = $calculo + $monto;

echo " el interes mensual sera de: ". $resultado;