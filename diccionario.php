<?php

$palabras=array("baseball","cat,bas,hol,base,rar,pull,ball");
$letras=explode(",", $palabras[1]);
$salida="";

for($i=0;$i<count($palabras);$i++){
    echo $palabras[$i]."\n";
}

echo "<br>";

for($i=0;$i<count($letras);$i++){
    
    for($j=0;$j<count($letras);$j++){

     if($j!=$i){

         $salida=$letras[$i].$letras[$j];
         
         if($salida==$palabras[0]){
             echo $salida;
         }
     }
    }
}



?>
