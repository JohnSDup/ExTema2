<?php

/*
Escriu una funció que determini la quantitat total a pagar per una 
trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador 
i costa 5 cèntims.
*/

const COSTE_PRIMER3MINUTOS = 0.10;
const COSTE_MINUTOS_ADICIONALES = 0.05;
$duracionLlamada = 10;

function costeLLamada($duracionLlamada) {
    if ($duracionLlamada <= 3) {
        return "El coste de la llamada ". COSTE_PRIMER3MINUTOS . "€";
    } 
        $minutosAdicionales = $duracionLlamada-3;
        $costeTotal = COSTE_PRIMER3MINUTOS + ($minutosAdicionales * COSTE_MINUTOS_ADICIONALES);
        return "La llamada ha costado " . $costeTotal . "€";
}



echo costeLLamada($duracionLlamada);






?>