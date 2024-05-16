<?php
require_once 'Figuras.php';

class Cuadrado extends Figuras
{
    protected $lado;

    public function getSuperficie()
    {
        return $this->lado * $this->lado;
    }

    /*
     public function __construct($valorLado)
    {
        $this->lado=$valorLado;
    }
     */
}