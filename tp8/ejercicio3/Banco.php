<?php
/*
 Modele un sistema bancario. El banco tiene personas, que son clientes. Los clientes,
tienen una o mas cuentas. Las cuentas pueden ser cajas de ahorro o cuentas
corrientes. El sistema debe permitir que un cliente
a. Que un cliente pueda:
i. Hacer depositos
ii. Realizar extraciones (si es caja de ahorro solo si tiene saldo)
b. Que sobre el banco se pueda:
i. Consultar todos los clientes que tienen saldos negativos
ii. Calcular el balance, como la suma de todos los activos de los
clientes, menos los saldos negativos
 */

class Banco{
    private $nombre;
    private $listaCliente = [];
}