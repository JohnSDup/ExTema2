<?php

/*
Imagina que som a una botiga on es ven:

    Xocolata: 1 euro
    Xiclets: 0,50 euros
    Caramels: 1,50 euros

Implementa un programa que permeti afegir càlculs a un total 
de compres d'aquest tipus. Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els 
subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

Sent, per tant, el total, 4.
*/

$chocolatePrecio = 1;
$chiclesPrecio = 0.50;
$caramelosPrecio = 1.5;

function chocolate($chocolatePrecio){
    $resultado = $chocolatePrecio *1;
    return $resultado;
}
function chicles($chiclesPrecio){
    $resultado = $chiclesPrecio *2;
    return $resultado;
}
function caramelos($caramelosPrecio){
    $resultado = $caramelosPrecio *3;
    return $resultado;
}

echo chocolate($chocolatePrecio) + chicles($chiclesPrecio) + caramelos($caramelosPrecio);


?>