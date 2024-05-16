<?php
require_once 'Figuras.php';
include_once 'Circulo.php';
include_once 'Cuadrado.php';
include_once 'Triangulo.php';

class objetoFunciones
{
    public function crearFigura($opcion)
    {

        $element = null;

        if ($opcion == "C") {
            $element = new Circulo();
        } elseif ($opcion == "T") {
            $element = new Triangulo();
        } elseif ($opcion == "A") {
            $element = new Cuadrado();
        }
        return $element;
    }

    public function mostrarAtributo($tipoElemento)
    {
        
    }
}





