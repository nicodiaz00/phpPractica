<?php
class Car
{
    private static int $cantidad = 0;
    private int $id;

    public static function getCantidad()
    {
        return Car::$cantidad;
    }
    public function setId($valorID)
    {
        $this->id = $valorID;
    }
    public function getId()
    {
        return $this->id;
    }
    public static function crearAuto(){
         $nuevo = new Car();
         Car::$cantidad= Car::$cantidad +1;
         $nuevo->setId(Car::$cantidad);
         return $nuevo;
}
}