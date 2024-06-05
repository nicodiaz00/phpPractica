<?php
    require_once("Cliente.php");

    class Empresa extends Cliente {

        private $representante;

        public function __construct($nombre, $representante) {
            parent::__construct($nombre);

            $this->representante = $representante;
        }

        public function esPersona() {
            return false;
        }

        public function toString() {
            $salida = "Empresa: ".$this->getNombre();
            $salida = $salida . 
            " Representante:".$this->representante->getNombre(); 
            return $salida;
        }        
    }