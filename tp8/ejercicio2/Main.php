<?php
require_once ('inclusion.php');
/*
  Un diagrama es un conjunto de figuras. Modele un sistema que permita cargar
figuras (circulos y cuadrados) a un diagrama. El sistema debe poder mostrar la
superficie total del diagrama.
 */

$square = new Cuadrado(2);

$triangle = new Triangulo(6,2);

$diagrama = new Diagrama();







$diagrama->addFigura($square);
$diagrama->addFigura($triangle);

echo " ";

echo $diagrama->suptotal();