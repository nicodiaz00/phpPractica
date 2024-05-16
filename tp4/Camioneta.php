<?php
//include_once 'Vehiculo.php';

class Camioneta extends Vehiculo
{
    protected  $ruedas =4;

    public function getRuedas()
    {
        return $this->ruedas;
    }
}