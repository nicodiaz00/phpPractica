<?php
class Triangulo extends Figuras{
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;

        $this->setSuperficie();
    }
    public function setSuperficie()
    {
        $this->superficie = ($this->base * $this->altura) / 2;
    }


}