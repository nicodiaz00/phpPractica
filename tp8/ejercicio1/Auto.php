<?php

class Auto{
    private $modelo;
    private $marca;
    private $precio;

    public function __construct($modelo, $marca, $precio){
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->precio = $precio;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function toString() //METODO CREADO para mostrar modelo de auto
    {

        return "modelo: " .$this->modelo;
    }
    public function __toString() //Sobre escribiendo el metodo magico __toString()
    {
        return "Modelo: " .$this->modelo . " Marca: ".$this->marca . " Precio: " .$this->precio;
    }


}