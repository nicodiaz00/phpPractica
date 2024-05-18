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
        $resultado=($this->base * $this->altura) /2;
        return $resultado;
    }
    public function setBaseAltura($base,$altura)
    {
        $this->base = $base;
        $this->altura =$altura;
    }
    public function mostrarAtributos()
    {
        get_class_vars(get_class($this));

        foreach ($this as $nombre => $valor) {
            echo "$nombre : $valor\n";
        }

    }
}