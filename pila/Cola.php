<?php
    class Cola {
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
            return $this->cantidad == 0;
        }

        public function encolar($x) {
            for ($i = $this->cantidad; $i >0; $i--) {
                $this->datos[$i] = $this->datos[$i -1];
            }
            $this->datos[0] = $x;
            $this->cantidad++;
        }

        public function proximo() {
            $ultimo = $this->cantidad -1;
            $dato = $this->datos[$ultimo]; 
            return $dato;
        }

        public function descolar() {
            array_pop($this->datos);
            $this->cantidad--;
        }

        public function toString() {
            if ($this->vacia()) {
                return 'Cola vacia';
            }

            $salida = '[';

            for($i = 0; $i < $this->cantidad; $i++) {
                $salida = $salida . $this->datos[$i] . ' ';
            }

            return $salida;
        }

    }