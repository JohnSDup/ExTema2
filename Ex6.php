<?php

/*
Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

    Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

Important

Consell: pot ser que la funció rand () et resulti útil.
*/

function isBitten(): string {
    $rand = rand(0, 1);
    if ($rand == 1) {
        return "Charlie ta mossegat el dit";
    } else { 
        return "Charlie no ta mossegat";   
    }
}

echo isBitten();





?>