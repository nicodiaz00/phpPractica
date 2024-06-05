<?php
    /**
     * Script principal del banco
     */
    require_once("Banco.php");
    require_once("Menu.php");

    $banco1 = new Banco("Nacion");

    $menu = Menu::getMenuBanco();

    do {

        $opcion = $menu->elegir();

        switch ($opcion) {
            case 1: $banco1->agregarCliente(); break;
            case 2: $banco1->listarClientes(); break;
            case 2: agregarTransaccion(); break;
            
        }
    } while ($opcion != 0);

    echo ("Adios!\n");
    