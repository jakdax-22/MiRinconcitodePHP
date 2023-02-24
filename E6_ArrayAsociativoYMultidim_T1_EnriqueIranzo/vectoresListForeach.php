<?php
$personas ["Kike"] ="=>Iranzo";
$personas["Ivan"] = "=>Marin";
$personas["Alex"] = "=>Prodan";
$personas["Alfredo"] = "=>Perez";
$personas ["Charter"] = "=>Man";

echo "<h2>Vectores Asociativos()</h2><br>";
echo "Recorremos el vector creado ==><br>";
echo "<br>";
foreach ($personas as $nombre=>$apellido)
{
    echo "<ul><li>$nombre";
     echo "$apellido</li></ul>";
     
    
    
}


