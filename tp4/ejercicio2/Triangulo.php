<?php
include_once 'Figuras.php';
class Triangulo extends Figuras
{
    protected $base;
    protected $altura;

    public function setBaseYAltura($valorBase,$valorAltura)
    {
        $this->base = $valorBase;
        $this->altura =$valorAltura;
    }
    public function getSuperficie()
    {
        $resultado = ($this->base * $this->altura) / 2;
        return $resultado;
    }

}