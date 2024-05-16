<?php
require_once 'Figuras.php';


class Circulo extends Figuras
{
    protected $radio;

    /*public function __construct($valorRadio)
    {
        $this->radio=$valorRadio;
    }
    */
    public function getSuperficie()
    {
        $resultado= ($this->radio * $this->radio) * 3.14;
        return $resultado;
    }
}