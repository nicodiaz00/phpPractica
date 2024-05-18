<?php
require_once 'Figuras.php';
include_once 'Circulo.php';
include_once 'Cuadrado.php';
include_once 'Triangulo.php';
include_once 'funciones.php';

/*
 El sistema solicita la creación de alguna figura.
a. Ejemplo: > Que clase de figura desea crear [C]irculo, [T]riangulo, Cu[A]drado
? → A
 */
$funciones = new funciones();
echo "Que clase de figura desea crear [C]irculo, [T]riangulo, Cu[A]drado" . "\n";
$figura1= trim(fgets(STDIN));
$elemento=$funciones->crearFigura($figura1);


/*
 b. Ingrese el lado del cuadrado :
 */
$funciones->ingresoValor($elemento);

//Luego de generar una figura, que muestre todos sus atributos

echo $funciones->mostrarAtributo($elemento);