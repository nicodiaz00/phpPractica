<?php
require_once ('Auto.php');
class Agencia{

    private $nombre;
    public $autos;
    private $fondos;

     public function __construct($name) {
        $this->nombre =  $name;
        $this->autos = [];
        $this->fondos = 2000;
    }
    public function getNombre() {
         return $this->nombre;
    }
    public function getSaldo(){
         return $this->fondos;
    }
    public function addFondos($monto){
         $this->fondos += $monto;
    }

    public function comprarAuto(Auto $autito1)
    {
        if($this->fondos > $autito1->getPrecio()){
            $this->fondos = $this->fondos - $autito1->getPrecio();
            $this->agregarAuto($autito1);
            echo "\n";
            echo "vehiculo comprado y agregado al stock";

        }else{
            echo "\n";
            echo "fondos insuficientes";
        }
    }
    public function agregarAuto(Auto $autito)
    {
        $this->autos[]=$autito;

    }
    public function mostrarStock()
    {
        echo "Vehiculos disponibles";
        echo "\n";
        echo "---------------------";
        echo "\n";
        foreach ($this->autos as $auto){
            echo $auto->toString();
            echo "\n";
        }
    }
    public function venderAuto(){
         $car = trim(readline("Ingrese el modelo:"));
         echo $car;
         echo strlen($car);

    }


    
}