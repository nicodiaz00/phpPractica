<?php
/*
 * Sobre un arreglo de 10 elementos realizar la inversión de sus elementos
a. Ejemplo: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] → [10, 9, 8, 7, 6, 4, 3, 2, 1]
*/

$arreglo = array(10);
$arreglo[0]=1;
$arreglo[1]=2;
$arreglo[2]=3;
$arreglo[3]=4;
$arreglo[4]=5;
$arreglo[5]=6;
$arreglo[6]=7;
$arreglo[7]=8;
$arreglo[8]=9;
$arreglo[9]=10;

$contador = 9;

for($i=0; $i<5; $i++){
    $aux = $arreglo[$i];
    $arreglo[$i]=$arreglo[$contador];
    $arreglo[$contador]=$aux;
    $contador --;
}

for($x=0; $x<10;$x++){
    echo " " .$arreglo[$x] ."\n";
}