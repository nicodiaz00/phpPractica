<?php

include 'Auto.php';
include 'Moto.php';
include 'Camioneta.php';



 $auto1 = new Auto();
 $moto1= new Moto();
 $camioneta1 = new Camioneta();

 //echo "el auto tiene".$auto1->color;
 echo " el auto tiene " . $auto1->getRuedas() . " ruedas" . "\n" ;
 echo " la moto tiene " .$moto1->getRuedas() . " ruedas" .  "\n";

 echo "La camioneta tiene: " .$camioneta1->getruedas() ." ruedas";




