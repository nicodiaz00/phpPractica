<?php
require_once 'Figuras.php';

class Triangulo extends Figuras
{
    protected $base;
    protected $altura;

    /*public function __construct($valorBase,$valorAltura)
    {
        $this->base=$valorBase;
        $this->altura=$valorAltura;
    }
    */
    public function getSuperficie()
    {
        $resutaldo=($this->base * $this->altura) /2;
        return $resutaldo;
    }
}