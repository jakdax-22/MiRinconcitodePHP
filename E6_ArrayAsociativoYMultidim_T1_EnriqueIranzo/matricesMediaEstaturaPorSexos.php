<?php

$personas=array(
    
    array("Altura (cm)", 172,165,179,163,170,174),
    array("Sexo", "H","M","H","M","M","H")
);

echo "Altura: ";
for ($i=0;$i<1;$i++){
    for ($alt=1;$alt<7;$alt++){
        echo $personas [$i][$alt] ." ";
    }
}
echo "<br><br>";
echo "Sexo: ";
for ($i=1;$i<2;$i++){
    for ($alt=1;$alt<7;$alt++){
        echo $personas [$i][$alt] ." ";
    }
}

echo "<br><br>";
echo "Número de Hombres de la muestra:<br>";
$contHom=0;
for ($i=1;$i<2;$i++){
    for ($alt=1;$alt<7;$alt++){
        if ($personas  [$i][$alt] == "H"){
            $contHom++;
            
        }
    }
}
echo $contHom ."<br>";
echo "Número de Mujeres de la muestra:<br>";
$contMuj=0;
for ($i=1;$i<2;$i++){
    for ($alt=1;$alt<7;$alt++){
        if ($personas  [$i][$alt] == "M"){
            $contMuj++;
            
        }
    }
}
echo $contMuj ."<br>";
echo "La media de altura de los Hombres es:<br>";
$mediaH=0;
$contH=0;
for ($i=0;$i<2;$i++){
    for ($alt=1;$alt<7;$alt++){
        if ($personas [$i][$alt] == "H") {
         $mediaH=$mediaH+$personas [0][$alt];
         $contH++;
        
        }
    }
}
echo $mediaH/$contH ."<br>";

echo "La media de altura de las Mujeres es:<br>";
$mediaM=0;
$contM=0;
for ($i=0;$i<2;$i++){
    for ($alt=1;$alt<7;$alt++){
        if ($personas [$i][$alt] == "M") {
         $mediaM=$mediaM+$personas [0][$alt];
         $contM++;
        
        }
    }
}
echo $mediaM/$contM;