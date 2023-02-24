<?php
$filename=$_FILES["userfile"]["name"];
$filenametemp=$_FILES["userfile"]["tmp_name"];


$upname="up" . $filename;

$uploaddir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\";

echo "<b>ejercicio 5.1</b><br>";

if (move_uploaded_file($filenametemp,$uploaddir. $upname)){
echo "Fichero válido. Carga realizada con éxito<br>";
echo "Nombre temporal del archivo: <b>$filenametemp</b><br>";
echo "Nombre final del archivo subido:<b>$upname</b>";
}
else {
    $error=$_FILES["userfile"]["fail"];
   echo $error;
}