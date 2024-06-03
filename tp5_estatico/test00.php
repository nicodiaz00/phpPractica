<?php
include_once ('Auto.php');
include_once ('Helpers.php');

//echo "HOLA";

 $autito1 = new Auto("Ford","Ka","Rojo",4);
 $autito2 = new Auto("Ford","Ka","Rojo",4);




  $tipo = $autito1->iguales($autito2);



  echo $tipo;
  echo igualdadDeAutos($tipo);