<?php
/*Realizar un programa que ordene un arreglo de valores aleatorios
a. Ej.: [5, 1, 3, 2, 4] , 3 → [1, 2, 3, 4, 5]
*/
$arreglo =array(5);

$arreglo[0]=5;
$arreglo[1]=1;
$arreglo[2]=3;
$arreglo[3]=2;
$arreglo[4]=4;

for($i=0;$i<3;$i++){
    for($x=0;$x<4;$x++){
        if($arreglo[$x]>$arreglo[$x+1]){
            $aux=$arreglo[$x+1];
            $arreglo[$x+1]=$arreglo[$x];
            $arreglo[$x]=$aux;
        }
    }


}
for($j=0;$j<=4;$j++){
    echo $arreglo[$j];
}