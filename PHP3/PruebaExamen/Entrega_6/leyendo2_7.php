<?php
$filename="mensajes2_6.txt";
echo "<h2>utiliza passthru</h2>";
echo "<h2>Visualizamos el contenido del fichero $filename</h2>";
$fp= fopen($filename, "r");
$rf= readfile($filename);

if ($fp){
$rf;
echo "<br>";
$linea= fgets($fp,255);
echo "<b>$linea</b>";
echo "Resto con fpassthru<br>";
fpassthru($fp);
fclose($fp);
}


