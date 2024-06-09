<?php
class Cliente{
    private $nombre;

    private $cuenta;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function addFondos($monto){
        $this->cuenta= $monto;
    }
    public function mostrarFondos(){
        return $this->cuenta;
    }



}