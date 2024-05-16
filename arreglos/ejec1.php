<?php

$arreglo = array();

for ($i =0; $i <10;$i++){
    echo "Ingrese un valor: " .$i+1 . " ";
    $arreglo[$i]= fgets(STDIN);
}

for ($x=0; $x <10; $x++){
    echo "los valores son: ".$arreglo[$x];
}