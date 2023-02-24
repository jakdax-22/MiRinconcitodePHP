<?php
echo "<h2>Utiliza fread</h2>";
echo "<br><br>";
$filename="./mensajes2_5_1.txt";
$fs= filesize($filename);
if (file_exists($filename)){
 $fp= fopen($filename, "r");   
    if ($fs>0){
    echo "El contenido del archivo $filename<br>";
    $contenido=fread($fp,$fs);
      echo $contenido;
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
