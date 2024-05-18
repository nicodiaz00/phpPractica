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

    public function setSuperficie($superficie)
    {
        return $this->radio = $superficie;
    }
    public function mostrarAtributos()
    {
        get_class_vars(get_class($this));

        foreach ($this as $nombre => $valor) {
            echo "$nombre : $valor\n";
        }

    }
}