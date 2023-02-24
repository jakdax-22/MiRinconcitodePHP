<?php
$personas ["Kike"] ="Kike=>Iranzo";
$personas["Ivan"] = "Ivan=>Marin";
$personas["Alex"] = "Alex=>Prodan";
$personas["Alfredo"] = "Alfredo=>Perez";
$personas ["Charter"] = "Charter=>Man";

echo "<h2>Vectores Asociativos()</h2><br>";
echo "Recorremos el vector creado ==><br>";
echo "ESTE FRAGMENTO SÓLO captaría el primer elemento del vector asociativo.<br>";
echo"<ul><li>" . $personas ["Kike"] . "</li></ul>" . "<br>";
echo "AHORA RECORRE TODO el vector asociativo<br>";

reset($personas);
while ($vect=each($personas))
{
    echo "<ul><li>$vect[1]</li></ul>";
     
    
    
}
