<?php

    class Menu {
        private $titulo;
        private $opciones;

        public function __construct($titulo) {
            $this->titulo = $titulo;
        }

        public function addOpcion($valor, $descripcion) {

            $this->opciones[] = [$valor, $descripcion];

        }

        public function elegir() {
            echo $this->titulo."\n";
            echo ("============\n");

            foreach ($this->opciones as $opcion) {
                echo "\033[31m";
                echo $opcion[0];
                echo "\033[0m";
                
                echo '-';
                echo $opcion[1];
                echo "\n";
            }

            echo ("Ingrese opcion: ");
            $opcion = fgets(STDIN);    
            echo ("\n");            

            return $opcion;
        }

        static function getMenuBanco() {
            $menu = new Menu("Sistema bancario");
            
            $menu->addOpcion(0, 'Salir');
            $menu->addOpcion(1, 'Agregar cliente');
            $menu->addOpcion(2, 'Listar clientes');
            $menu->addOpcion(3, 'Agregar Transaccion');
            
            return $menu;
        }

        static function getMenuClientes() {
            $menu = new Menu('Clientes');

            $menu->addOpcion(0, 'Volver'); 
            $menu->addOpcion(1, 'Agregar Persona'); 
            $menu->addOpcion(2, 'Agregar Empresa'); 

            return $menu;
        }


    }