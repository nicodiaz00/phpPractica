<?php

class Auto
{
    private string $color;
    private int $cantRuedas;
    private int $velocidad;

    protected string $marca;
    protected string $modelo;

    public function getColor(){
        return $this->color;
    }
    public function getCantRuedas(){
        return $this->cantRuedas;
    }
    public function getVelocidad(){
        return $this->velocidad;
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

    public function __construct(string $autoMarca, string $autoModelo,string $colorAuto, int $cantDeRuedas)
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
    public function iguales(Auto $otroAuto)
    {
        if($this->getColor() === $otroAuto->getColor() && $this->marca === $otroAuto->marca && $this->modelo === $otroAuto->modelo){
            return true;

        }else{
            return false;

        }
    }

}


