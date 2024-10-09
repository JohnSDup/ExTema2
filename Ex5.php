<?php


/*
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:
   Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
   Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
  Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
   Si la nota és menor a 33%, l'estudiant reprovarà.
*/

function verificador() {
   //Nota del alumno;
   $notaAlum = 61;

   if ($notaAlum >= 60) {
      return "El alumno es de primera Division con una nota del = " . $notaAlum . " % ";
   } else if ($notaAlum >= 45) {
      return "El alumno es de segunda Division con una nota del = " . $notaAlum . " % ";
   } else if ($notaAlum >= 33) {
      return "El alumno es de tercera Division con una nota del = " . $notaAlum . " % ";   
   } else {
      return "El alumno ha suspendido con una nota del = " . $notaAlum . " % ";
   }
}

echo verificador();

//check var_dump()





?>