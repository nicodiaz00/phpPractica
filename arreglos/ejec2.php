<?php
/*Realice un programa que cargue un arreglo de 10 elementos aleatorios y los
muestre*/

$array = array();

for($i=0;$i<10;$i++){
    $array[$i]= random_int(1,10);
}

for($x=0;$x<10;$x++){
    echo "los valores generados son: ".$array[$x] ."\n";
}