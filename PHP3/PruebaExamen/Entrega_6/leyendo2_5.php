<?php
$filename="mensajes2_5.txt";
echo "<h2>utiliza readfile()<br></h2>";
echo "El contenido del fichero $filename es:<br>";

if (file_exists($filename)){
readfile($filename);
}
else{
    echo "El fichero no existe";
}


