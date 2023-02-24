<?php
$filename=$_FILES["userfile"]["name"];
$tmpname=$_FILES["userfile"]["tmp_name"];

$upname="up" . $filename;

$uploaddir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\";

echo "<h3>ejercicio 5.2</h3>";
echo "<b>Comprueba si existe el directorio UPLOADS</b><br>";

if (@opendir($uploaddir)){
if (move_uploaded_file($tmpname,$uploaddir.$upname)){
echo "Nombre y ruta completa del archivo:<b>$uploaddir$upname</b><br>";
echo "Si existe el directorio <b>$uploaddir</b><br>";
echo "Nombre del Fichero: <b>$upname</b> válido<br>";
echo "Carga realizada con éxito";

}



}
else {
echo "Error. No existe el directorio $uploaddir";
}
