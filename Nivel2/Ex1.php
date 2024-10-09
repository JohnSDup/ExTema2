<?php

/*
Escriu una funció que determini la quantitat total a pagar per una 
trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador 
i costa 5 cèntims.
*/

$costeMinuto = 0.05;
$duracion = 3; 
$tiempoLlamada = 10; //tiempo de la llamada total

function costeLLamada($costeMinuto, $duracion, $tiempoLlamada) {
    if ($tiempoLlamada <= $duracion) {
        return "El coste de la llamada es 0.10 céntimos";
    } 
    else if ($tiempoLlamada > $duracion) {
        $costeExtra = ($tiempoLlamada - $duracion) * $costeMinuto;
        $costeTotal = 0.10 + $costeExtra;
        return "El coste de la llamada es " . $costeTotal . " céntimos";
    } 
    else {
        return "Introduzca los minutos de llamada correctamente";
    }
}

echo costeLLamada($costeMinuto, $duracion, $tiempoLlamada);






?>