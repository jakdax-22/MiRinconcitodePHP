<?php
$filename=$_FILES["userfile"]["name"];
$tmpfilename=$_FILES["userfile"]["tmp_name"];
$extension=$_FILES["userfile"]["type"];
$uploaddir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\";
$upfilename="up" . "$filename";

echo "<h3>ejercicio 5.4</h3>";
if ($extension == 'application/pdf' || $extension == 'application/postcript'){
if (move_uploaded_file($tmpfilename, $uploaddir.$upfilename)){
echo "<b>El tipo de fichero escogido es:</b> aplicación/pdf<br>";
echo "<br>Fichero válido, carga realizada con éxito";
}

}
else {
echo "<b>El fichero escogido es otro</b><br>";
echo "<br>Sólo se pueden subir los ficheros .pdf y .ps";
}


