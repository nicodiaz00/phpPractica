<?php
include_once 'Vehiculo.php';

class Moto Extends Vehiculo
{
    function __construct()
    {
        $this->ruedas =2;
    }
}