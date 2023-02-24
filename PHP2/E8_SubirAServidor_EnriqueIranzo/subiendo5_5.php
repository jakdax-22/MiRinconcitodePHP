<?php
$filename=$_FILES["userfile"]["name"];
$tmpfilename=$_FILES["userfile"]["tmp_name"];
$docdir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\DOC\\";
$uploaddir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\";
echo "<h3>ejercicio 5.5</h3>";
echo "<br>Vamos a intentar subir el archivo a doc/...<br>";
if (@opendir($docdir)){
if (move_uploaded_file($tmpfilename, $docdir.$filename)){    
echo "Carga realizada con Éxito<br><br>";
echo "Subido archivo <b>$filename</b> al directorio <b>$docdir</b>";
}
}
else {
echo "No existe el directorio /doc.<br>";
echo "Lo vamos a crear...<br><br>";
if (mkdir($docdir)){
if (chmod($docdir,0777)){
   if (move_uploaded_file($tmpfilename, $docdir.$filename)){ 
echo "Carga realizada con Éxito<br><br>";
echo "Subido archivo <b>$filename</b> al directorio <b>$docdir</b>";

       
   }    
}


}
}