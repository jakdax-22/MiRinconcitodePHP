<?php
function cadenaUtilidades ($cadena){
$num= strlen ($cadena);
$array= explode (" ",$cadena);
$numpalab=count ($array);
$i=0;
echo "El número de letras total de la frase es : $num <br>";
echo "El número de palabras totales es: $numpalab <br>";
 for ($i=0; $i<count($array); $i++){
        echo $array[$i] ." " .strlen($array[$i]) ."<br>";
    }

}
$frase= "Hola me llamo Enrique";
cadenaUtilidades ($frase);
