<?php
require_once ('Agencia.php');

$agencia1 = new Agencia("pepe Autos");
$car1 = new Auto("focus","ford",200);
$car2= new Auto("gol","vw",400);
$car3 = new Auto("corsa","chevrolet",500);



echo $agencia1->addFondos(3000);
echo "bievenido a: ".$agencia1->getNombre();
echo "\n";
echo "el saldo acutal es de: " .$agencia1->getSaldo();
$agencia1->comprarAuto($car1);

$agencia1->comprarAuto($car2);

$agencia1->comprarAuto($car3);
echo "\n";

echo "Saldo actual: " .$agencia1->getSaldo();



//echo $agencia1->mostrarStock();

$agencia1->venderAuto();
echo "\n";
$agencia1->mostrarStock();







