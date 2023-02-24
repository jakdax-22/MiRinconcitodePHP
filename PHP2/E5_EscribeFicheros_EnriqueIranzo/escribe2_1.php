<?php

echo "<h3>Gestión de ficheros en PHP</h3>";
echo "<b>Genera un fichero .txt en el directorio actual</b><p/><br>";
echo "Versión sin comprobación de errores en acceso al archivo<br>";
echo "El fichero se crea cada vez que ejecutamos<br>";
$nombre="mensajes.txt";
$fp=fopen($nombre,"w");
fwrite($fp, "Buenos días<br>\n");
fwrite($fp, "Buenas tardes<br>\n");
fwrite($fp, "Buenas noches<br>\n");

fclose($fp);
