<?php
require_once 'Figuras.php';
include_once 'Circulo.php';
include_once 'Cuadrado.php';
include_once 'Triangulo.php';

class funciones
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
    public function ingresoValor($tipoElemento){


        if($tipoElemento instanceof Circulo){
            echo "Ingrese el valor del radio: ";
            $radio= trim(fgets(STDIN));
            $tipoElemento->setSuperficie($radio);
        }elseif ($tipoElemento instanceof Cuadrado){
            echo "ingrese Valor del lado: ";
            $lado = trim(fgets(STDIN));
            $tipoElemento->setLado($lado);
        }else if($tipoElemento instanceof Triangulo){

            echo "Ingrese base: ";
            $base = trim(fgets(STDIN));
            echo "Ingrese altura: ";
            $altura =trim(fgets(STDIN));
            $tipoElemento->setBaseAltura($base,$altura);

        }
        return $tipoElemento;

    }
    public function mostrarAtributo($tipoElemento)
    {
        $aux =null;
        if($tipoElemento instanceof Cuadrado){
            $aux =$tipoElemento->mostrarAtributos();
        } else if($tipoElemento instanceof Circulo){
            $aux =$tipoElemento->mostrarAtributos();
        } else if($tipoElemento instanceof Triangulo){
            $aux =$tipoElemento->mostrarAtributos();
        }
        return $aux;
    }






}





