<?php

    class Pila {
        private $cantidad;
        private $datos;

        public function __construct() {
            $this->iniciar();
        }

        public function iniciar() {
            $this->cantidad = 0;
            $this->datos = [];
        }

        public function vacia() {
            return ($this->cantidad == 0);
        }

        public function apilar($x) {
            $this->datos[] = $x;
            $this->cantidad++;            
        }

        public function tope() {
            $ultimo = $this->cantidad -1;
            $dato = $this->datos[$ultimo]; 
            return $dato;
        }

        public function desapilar() {
            array_pop($this->datos);
            $this->cantidad--;
        }

        public function toString() {
            if ($this->vacia()) {
                return 'Pila vacia';
            }

            $salida = '[';

            for($i = 0; $i < $this->cantidad; $i++) {
                $salida = $salida . $this->datos[$i] . ' ';
            }

            return $salida;
        }

    }