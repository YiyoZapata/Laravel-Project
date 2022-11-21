<!DOCTYPE html>

<html>
    <head>
        <title>Métodos de ordenación</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Array desordenado</h1>
        
<?php   
$miarray = [
    20,
    35,
    5,
    50,
    10,
    1,
]; 
var_dump($miarray);
?>
        <h2>Método burbuja</h2>
<?php

$miarray = [
    20,
    35,
    5,
    50,
    10,
    1,
];

//Metodo burbuja
$longitud = count($miarray);//cuento las posiciones
$posicion = 0;//variable auxiliar para hacer el intercambio

for($i = 0; $i < $longitud - 1; $i++ ){

    for($j = 0; $j < $longitud - $i - 1;$j++){
        
        if($miarray[$j] > $miarray[$j+1]){
            $posicion = $miarray[$j];
            $miarray[$j] = $miarray[$j+1];
            $miarray[$j+1] = $posicion;
        }
    }
}

for($i=0;$i < $longitud;$i++){
   echo($miarray[$i] . ",") ;
}



?>
        
        <h2>Método por intercambio</h2>
        
<?php

//Metodo por intercambio

$posMin = 0;
$aux;

for($i=0; $i < $longitud-1;$i++){
    $posMin = $i;
    
    for($j= $i+1;$j < $longitud;$j++){
        
        if($miarray[$j] < $miarray[$posMin]){
            $posMin = $j;
        }
    }
    
    $aux = $miarray[$i];
    $miarray[$i] = $miarray[$posMin];
    $miarray[$posMin] = $aux;
}


for($i=0;$i < $longitud;$i++){
   echo($miarray[$i] . ",") ;
}



?>
        <h2>Método por insercción</h2>
        
<?php
function insercion($A,$n){
    
    for($i = 0; $i < $n;$i++){
        $v = $A[$i];
        $j = $i - 1;
        
        while($j >= 0 && $A[$j] > $v){
            
            $A[$j+1] = $A[$j];
            $j--;
        }
        $A[$j+1] = $v;
    }
    return $A;
}

function main (){
    $VectorA = $miarray = [
    20,
    35,
    5,
    50,
    10,
    1,
];
    $VectorB = insercion($VectorA, sizeof($VectorA));
    
    for($i = 0; $i < sizeof($VectorB);$i++){
        echo $VectorB[$i]."\n";
    }
}

main();
?>
          

   </body>
</html>