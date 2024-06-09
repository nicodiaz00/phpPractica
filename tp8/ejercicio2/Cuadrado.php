<?php

class Cuadrado extends Figuras{
    private $lado;

    public function __construct($lado){
        $this->lado = $lado;
        $this->setSuperficie();
}
    public function setSuperficie()
    {
         $this->superficie = $this->lado * $this->lado;
    }



}