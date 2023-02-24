<?php
define("radioT" , 6371);
define("distanciaS" , 149600000);
define ("pi" , 3.142857);
define ("vueltaE" , pi * 2 * radioT);
define ("equiv" , distanciaS / vueltaE);

echo "El radio de la Tierra es: <b>" . radioT ;
echo " km</b><br>";
echo "La distancia de la Tierra al Sol es: <b>" . distanciaS ;
echo " km</b><br>";
echo "La longitud de una vuelta al Ecuador es: <b>" . vueltaE ;
echo " km</b><br>";
echo "La longitud equivale a: <b>" . equiv ;
echo " vueltas</b>"
?>

