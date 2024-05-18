<?php
require_once 'Figuras.php';

class Cuadrado extends Figuras
{
    protected $lado;

    public function getSuperficie()
    {
        return $this->lado * $this->lado;
    }
    public function setLado($valor)
    {
        $this->lado = $valor;
    }
    public function mostrarAtributos()
    {
        get_class_vars(get_class($this));

        foreach ($this as $nombre => $valor) {
            echo "$nombre : $valor\n";
        }

    }

}