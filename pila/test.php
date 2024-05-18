<?php
    require_once('Pila.php');
    require_once('Cola.php');

    function copiarPila($origen, $destino) {
        $aux = new Pila();

        while (!$origen->vacia()) {
            $aux->apilar($origen->tope());
            $origen->desapilar();
        }

        while (!$aux->vacia()) {
            $origen->apilar($aux->tope());
            $destino->apilar($aux->tope());
            $aux->desapilar();
        }

    }

    function promedio($pila) {
        $prom = 0;
        $aux = new Pila();
        copiarPila($pila, $aux);

        echo $aux->toString();
        echo "\n";

        $acumulado = 0;
        $cantidad = 0;

        while (!$aux->vacia()) {
            $acumulado = $acumulado + $aux->tope();
            $cantidad ++;
            $aux->desapilar();
        }

        $prom = $acumulado / $cantidad;

        return $prom;
    }

    function iguales($p, $q) {
        $aux1 = new Pila();
        $aux2 = new Pila();
        copiarPila($p, $aux1);
        copiarPila($q, $aux2);

        while (!$aux1->vacia() && !$aux2->vacia()) {
            if ($aux1->tope() != $aux2->tope()) {
                return false;
            }
            $aux1->desapilar();
            $aux2->desapilar();
        }
        
        return $aux1->vacia() && $aux2->vacia();
    }


    $c = new Cola();
    
    $c->encolar(5);
    $c->encolar(7);
    $c->encolar(10);

    echo $c->toString();
    echo "\n";
    echo "el proximo a salir es:".$c->proximo();
    echo "\n";