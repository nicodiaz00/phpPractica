<?php
include_once ('Figuras.php');

class Diagrama{
    private $conjunto = [];


    public function addFigura($figura){
        $this->conjunto[] = $figura;
    }

    public function suptotal()
    {
        $total =0;
        foreach ($this->conjunto as $value) {
            if($value instanceof Figuras){
                $total= $total + $value->getSuperficie();
            }
        }
        return $total;
    }
}