<?php
    abstract class Cliente {
        private $nombre;

        public function __construct($nombre) {
            $this->nombre = $nombre;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function toString() {
            return "Nombre: ".$this->getNombre();
        }

        abstract public function esPersona();
    }