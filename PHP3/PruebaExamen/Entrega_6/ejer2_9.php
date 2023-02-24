<?php
echo "<h2>Lectura con fgetc en bucle</h2>";
$filename="ejer2_8_0.txt";
$hoy= getdate();
$fecha=$hoy['mday'] . "/" . $hoy['month'] . "/" . $hoy['year'];
echo "Las peticiones contenidas en $filename hasta la fecha $fecha son:<br><br>";
$fp= fopen($filename, "r");
if ($fp){
while (!feof($fp)){
$car= fgetc($fp);
if ($car == "\n"){
echo "<br>";
}
else{
echo $car;
}

}
fclose($fp);
}

