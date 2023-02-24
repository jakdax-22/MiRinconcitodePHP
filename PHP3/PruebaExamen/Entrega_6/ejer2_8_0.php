<?php
echo "<h2>Lectura con readfile</h2>";
$filename="ejer2_8_0.txt";
$hoy= getdate();
$fecha=$hoy['mday'] . "/" . $hoy['month'] . "/" . $hoy['year'];
echo "Las peticiones contenidas en $filename hasta la fecha $fecha son:<br><br>";
readfile($filename);

