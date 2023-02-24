<?php

echo "<h2>Utiliza fread</h2>";
echo "<br><br>";
$filename="./mensajes2_6.txt";
$fs= filesize($filename);
if (file_exists($filename)){
 $fp= fopen($filename, "r");   
    if ($fs>0){
    echo "El contenido del archivo $filename<br>";
    $contenido=fread($fp,$fs);
      echo $contenido;
      echo "<br><br>El tamaño es:<br>";
      echo $fs . " caracteres";
    }
    else {
        echo 'El fichero está vacío';
    }
  fclose($fp);
}
else {
    echo "El fichero no existe o no tiene permisos<br>";
 
    exit();
}

