<?php
    require_once("Cliente.php");

    class Persona extends Cliente {

        public function __construct($nombre) {
            parent::__construct($nombre);
        }

        public function esPersona() {
            return true;
        }

    }