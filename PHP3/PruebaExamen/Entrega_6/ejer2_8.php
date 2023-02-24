<?php
echo "<h2>Lectura con fgets en bucle</h2>";
$filename="ejer2_8_0.txt";
$hoy= getdate();
$fecha=$hoy['mday'] . "/" . $hoy['month'] . "/" . $hoy['year'];
echo "Las peticiones contenidas en $filename hasta la fecha $fecha son:<br><br>";
$fp= fopen($filename, "r");
if ($fp){
while (!feof($fp)){
$fg=fgets($fp,255);
echo $fg;
echo "<br>";
}
fclose($fp);
}


