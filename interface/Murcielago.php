<?php
require ('Mamifero.php');
require ('Volador.php');
class Murcielago extends Mamifero implements Volador {

    protected $tipo;

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function GetTipo()
    {
        return $this->tipo;
    }
    public function Volar()
    {
        return "El murcielago vuela..";
    }

}


