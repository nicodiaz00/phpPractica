<?php

class Auto
{
    private static int $cantidad =0; //propiedad estatica
    private int $id; //atributo que sera una IDENTIDAD
    private string $color;
    private int $cantRuedas;
    private int $velocidad;

    protected string $marca;
    protected string $modelo;

    public function getId(){
        return $this->id;
}

    public function getColor(){
        return $this->color;
    }
    public function getCantRuedas(){
        return $this->cantRuedas;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setId(int $unId)
    {
        $this->id = $unId;
    }
    public function setColor(string $color){
        $this->color = $color;
    }
    public function setCantRuedas(int $cantRuedas){
        $this->cantRuedas = $cantRuedas;
    }
    public function setVelocidad(int $velocidad){
        $this->velocidad = $velocidad;
    }
    public static function crear(){
         $nuevo =new Auto();
         Auto::$cantidad = Auto::$cantidad +1;
         $nuevo->setId(Auto::$cantidad);
         return $nuevo;
    }




    public function __construct(string $autoMarca="", string $autoModelo="",string $colorAuto="", int $cantDeRuedas=4)
    {
        //$this->cantRuedas = $cantDeRuedas;
        //$this->color = $colorAuto;
        //$this->velocidad = 0;
        $this->setCantRuedas($cantDeRuedas);
        $this->setColor($colorAuto);
        $this->setVelocidad(0);
        $this->marca= $autoMarca;
        $this->modelo = $autoModelo;


    }

    //esta funcion compara un auto con otro y devuelve true o false.
    public function iguales(Auto $otroAuto)
    {
        if($this->getColor() === $otroAuto->getColor() && $this->marca === $otroAuto->marca && $this->modelo === $otroAuto->modelo){
            return true;

        }else{
            return false;

        }
    }


}


