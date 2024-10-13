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
$dulces = array (
    'chocolate' => 1,
    'chicles' => 0.50,
    'caramelos' => 1.5,
);
$total = 0;

function subTotales($dulces,$dulce,$cantidad) {
    if (isset($dulces[$dulce])) {
        return $dulces[$dulce] * $cantidad;
    }
    return "Añada el dulce correcto";
}

$totalChocolate = subTotales($dulces,'chocolate',2);
$totalchicles = subTotales($dulces, 'chicles',7);
$totalCaramelos = subTotales($dulces, 'caramelos',3);

$total = $totalChocolate + $totalchicles + $totalCaramelos;

echo "El total de la compra es " . $total . " euros ";
?>