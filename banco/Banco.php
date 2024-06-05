<?php
    require_once("Persona.php");
    require_once("Empresa.php");
    require_once("Menu.php");

    class Banco {
        private $nombre;
        private $clientes;
        private $transacciones;

        public function __construct($nombre) {
            $this->nombre = $nombre;
            $this->clientes = [];
            $this->transacciones = [];
        }

        private function agregarPersona() {
            echo ("Agregar persona\n");
            echo ("===============\n");
            echo ("Ingrese nombre de la persona:");
            $nombre = fgets(STDIN);
    
            $persona = new Persona($nombre);
            
            $this->clientes[] = $persona;
            echo "Ok.\n";
        }

        private function buscarRepresentante($nombre) {

            foreach ($this->clientes as $cliente) {

                if ($cliente->esPersona()) {
                    if ($cliente->getNombre() == $nombre) {
                        return $cliente;
                    }
                }

            }       

            return null;
        }

        private function agregarEmpresa() {
            echo ("Agregar empresa\n");
            echo ("===============\n");
            echo ("Ingrese nombre de la empresa:");
            $nombre = fgets(STDIN);

            echo ("Ingrese nombre de la persona que la representa:");
            $representanteNombre = fgets(STDIN);
    
            $persona = $this->buscarRepresentante($representanteNombre);
            if (!$persona) {
                echo "Representante no encontrado\n";
            } else {
                $empresa = new Empresa($nombre, $persona);
                $this->clientes[] = $empresa;
                echo "Ok.\n";
            }

        }

        public function agregarCliente() {
            $menu = Menu::getMenuClientes();

            do {
                $opcion = $menu->elegir();
                switch ($opcion) {
                    case 1: $this->agregarPersona(); break;
                    case 2: $this->agregarEmpresa(); break;
                }
            } while ($opcion != 0);            
        }

        public function listarClientes() {
            echo "Listado de clientes\n";
            echo "===================\n";
            
            foreach ($this->clientes as $cliente) {
                echo $cliente->toString();
                echo "\n";

            }       
        }

    }