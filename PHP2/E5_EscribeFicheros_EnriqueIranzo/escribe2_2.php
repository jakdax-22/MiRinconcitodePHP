<?php
echo "<h3>Añadiendo en el fichero</h3>";
echo "<b>Se AÑADEN datos cada vez que ejecutamos</b><p/>";
$nombre="fichero.txt";
$fp=fopen($nombre,"a+");

fwrite($fp, "Buenos días<br>\n");
fwrite($fp, "Buenas tardes<br>\n");
fwrite($fp, "Buenas noches<br>\n");
fclose($fp);
