<?php
$filename=$_FILES["userfile"]["name"];
$size=$_FILES["userfile"]["size"];
$tmpfilename=$_FILES["userfile"]["tmp_name"];
$uploaddir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\";
$upname="up" . "$filename";
$maximo=100000;

echo "<b>ejercicio 5.3</b><br><br>";
echo "Controla que el tamaño del fichero no supere los 100k<br><br>";

if (move_uploaded_file($tmpfilename, $uploaddir. $filename)){
if ($size<$maximo){
echo "Fichero válido. Carga realizada con éxito";
}
else {
echo "Fichero excede el límite. Supera los 100k<br>";
echo "<b>No podemos realizar la operación de subida</b><br>";
echo "El archivo tiene un tamaño = $size";
}
}
