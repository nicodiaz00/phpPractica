<?php
/*
Realizar un programa que permita recircular un arreglo, esto es tomar el ultimo e
insertarlo al principio, una dada cantidad de veces
a. Ej.: [1, 2, 3, 4, 5] , 3 → [3, 4, 5, 1, 2]
 */
$arreglo= array(5);

$arreglo[0]=1;
$arreglo[1]=2;
$arreglo[2]=3;
$arreglo[3]=4;
$arreglo[4]=5;
$contador =0;
echo "ingrese el numero de vueltas: ";
$vueltas =intval(fgets(STDIN));

while($contador < $vueltas){
    for($i=count($arreglo)-1;$i>0;$i--){
        $aux=$arreglo[$i-1];
        $arreglo[$i-1]=$arreglo[$i];
        $arreglo[$i]=$aux;

    }
    $contador++;
}
for($x=0;$x<count($arreglo);$x++){
    echo $arreglo[$x];
}

//echo count($arreglo);