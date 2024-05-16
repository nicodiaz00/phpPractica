<?php
include 'Cuadrado.php';
include 'Triangulo.php';
include 'Circulo.php';

$cuadrado1 = new Cuadrado();
$triangulo1 =new Triangulo();
$circulo1 = new Circulo();
$cuadrado1->setSuperficie(6);
$triangulo1->setBaseYAltura(5,3);
$circulo1->setRadio(3);


//echo "la superficie del cuadrado es: " .$cuadrado1->getSuperficie() ."\n";
//echo "la superficie del tringulo es: " .$triangulo1->getSuperficie() ."\n";
//echo "la superfici del circulo es: " .$circulo1->getSuperficie();

$cuadrado2 = new Cuadrado();
$cuadrado3 = new Cuadrado();
$circulo2 = new Circulo();

$cuadrado2->setSuperficie(10);
$cuadrado3->setSuperficie(7);
$circulo2->setRadio(5);

$total= $cuadrado2->getSuperficie() + $cuadrado3->getSuperficie() + $circulo2->getSuperficie();

echo "La suma de las 3 figuras es: " .$total ."\n";

$arreglo[3] = new Figuras();
$arreglo[0] = new Cuadrado();
$arreglo[1] = new Circulo();
$arreglo[2] = new Cuadrado();

$arreglo[0]->setSuperficie(10);
$arreglo[1]->setRadio(5);
$arreglo[2]->setSuperficie(10);

$total = 0;

for($i=0; $i<3;$i++){
    $total=$total +$arreglo[$i]->getSuperficie();
}
echo " la suma de las superficies es: " .$total;



