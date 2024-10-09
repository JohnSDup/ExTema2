<html>
<head>
<?php

    //$nombre = "Henry";

    //echo "Mi nombre ". $nombre;
    /*
    Integer
    Float
    String
    boolean
    $arrayName = array();
    */

    //define ("PI", 3.14159);
    //echo "El valor de pi es" . 'PI;

    /*echo "6 + 4 = " . (6 + 4) . "<br/>";
    echo "6 - 4 = " . (6 - 4) . "<br/>";
    echo "6 * 4 = " . (6 * 4) . "<br/>";
    echo "6 / 4 = " . (6 / 4) . "<br/>";
    echo "6 % 4 = " . (6 % 4) . "<br/>";
   
    
    $miNumero = 6;
    $refNumero = &$miNumero;
    
    $miNumero = 20;
    echo $refNumero; 
    
    
    $miEdad = 20;

    if ($miEdad > 10) {
        echo "Mi  edad es mayor a 10 ";
    }
    else if ($miEdad === 20) {
        echo "Tu edad es 20";
    }
    else{
        echo " No puedo adivinar tu edad"
    }
   

    $miEdad = 20;
    
    if (($miEdad === 20) && ($miEdad <25)){
        echo " tu edad es 20 ";
    }
    if (($miEdad === 20) || ($miEdad >25)){
        echo " tu edad es 20 "; // si una condicion es verdadera
    }
    
    //ternario
    $miNumero = 56;
    $resultado = ($miNumero < 40) ? "Tu numero es menor a 40": "Tu numero no es mayor a 40";
    echo $resultado;
    

    $usuario = "Henry";
    switch($usuario){
        case " Luis":
            echo "Hola Luis";
            break;
        default:
        echo "No puedo adivinar tu nombre";
        break;
    }
        

    $miNumero = 0;
    while($miNumero <10){ // sea menor a 10
        echo$miNumero . "<br/>";
        $miNumero++;
    }
        

    for($num = 1; $num <= 10; $num++){
        echo $num;
        if ($num !==10){
            echo ", ";
        }else{
            break;
        }
    }

   

    $personas = array("Henry","Luis", "Carmen", "Beto");
    //echo count($personas); //declara que son 4 
    foreach($personas as $persona){
    echo $persona. "<br/>";        
    }
  
    $personas = array("Luis" => "20", "Beto" =>"30", "Carmen" => "25");
        
    foreach($personas as $key => $val){
        //echo $key . "tiene" . $val , "<br/>";
        echo "$key tiene $val <br/>";
    }
    

    $cadena = "  Los colores    ";
    echo strlen($cadena). "<br/>"; //strelen cuenta las palabras y espacios
    echo strlen(ltrim($cadena)) . "<br/>";
    echo strlen(rtrim($cadena)) . "<br/>"; // segun las posicion elimina los epacios
    echo strlen(trim($cadena))  . "<br/>";       

    $usuario = "Henry"; //definido como string

    printf("Mi nombre es %s" , $usuario);
          

    $mensaje = "Los cuadernos ";
    echo strtoupper ($mensaje). "<br/>";
    echo strtolower ($mensaje). "<br/>";
    
    print_r(explode(' ', $mensaje)); // se crear un array con 2 elementos

    function myFunction($a , $b){
        return $a + $b;
    }

    echo  "La suma de 6 + 4 =  " . myFunction(6,4);
    */


    function isComplete(): bool {
        return true;
      }
      
      echo isComplete();
      
      
      function isAdult(int $age): bool {
        return $age >= 18;
      }
      
      echo isAdult(10);

?>
    
</head>
</html>