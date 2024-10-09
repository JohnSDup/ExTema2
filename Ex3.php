<?php

$X = 2;
$Y = 3;

$N = 212.443;
$M = 956.1002;



echo "Los numeros son = " . $X . " y " . $Y ."<br>";
echo "<br>";
echo "La suma es = " . ($X + $Y) . "<br>";
echo "La resta es = " . ($X - $Y) . "<br>" ;
echo "El producto = " .  ($X * $Y) . "<br>";
echo "La division = " . ($X / $Y) . "<br>";

echo "<br>";

echo "Los numeros son = " . $N . " y " . $M ."<br>";
echo "<br>";
echo "La suma es = " . ($N + $M) . "<br>";
echo "La resta es = " . ($N - $M) . "<br>" ;
echo "El producto = " .  ($N * $M) . "<br>";
echo "La division = " . ($N / $M) . "<br>";

echo "<br>";


echo "El doble de X es = " . ($X * 2) . "<br>";
echo "El doble de Y es = " . ($Y * 2) . "<br>";
echo "El doble de N es = " . ($N * 2) . "<br>";
echo "El doble de M es = " . ($M * 2) . "<br>";

echo "<br>";

echo "La suma de todas las variables es = " . ($X + $Y + $N + $M) . "<br>";


//Primero numero 
$p1 = 6;
//Segundo numero
$p2 = 4;

function calculadora($p1,$p2,$operacio) {
    switch ($operacio) {
    case 'suma' : 
        return "La suma es = " .$p1 + $p2;
    case 'resta':
        return "La resta es = " . $p2 - $p2;
    case 'multiplicacion':
        return "La multiplicacion es = " . $p1 * $p2;
    case 'division':
        return "La division es = " . $p1 / $p2;
    default:
        return "Introduzca el valor correcto";
    }
}

echo "<br>";

//Cambiar el operador 
echo calculadora($p1,$p2, 'suma') . "<br>";












?>