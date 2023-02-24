<?php
$filename=$_FILES["userfile"]["name"];
$tmpfilename=$_FILES["userfile"]["tmp_name"];
$docdir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\DOC\\";
$dsdir="C:\\PROJECTS_PHP_IAW\\PHP2\\E8_SubirAServidor_EnriqueIranzo\\UPLOADS\\DOC\\DSC\\";
$dsccontent=$_POST["dsc"];
$carpeta="descrip";
$carpetadoc="DOC";
echo "<b>ejercicio 5.7</b><br><br>";

if (@opendir($docdir)){
if (move_uploaded_file($tmpfilename, $docdir.$filename)){
   echo "Subida realizada";
    if (@opendir($dsdir)){
        $fp=fopen($dsdir.$carpeta, "a+");
        fwrite($fp, $dsccontent);
        fclose($fp);
        echo "Añadimos descripción introducida<br>";
        echo "al archivo LOCAL DSC/descripciones.dsc";
        
    }
    else {
       mkdir($dsdir,0777);
        chmod($dsdir,0777);
       $fp=fopen($dsdir.$carpeta, "a+");
        fwrite($fp, $dsccontent);
        fclose($fp);
        echo "Añadimos descripción introducida<br>";
        echo "al archivo LOCAL DSC/descripciones.dsc";
    }
}
}
else {
 mkdir($docdir,0777);
chmod($docdir,0777);
if (move_uploaded_file($tmpfilename, $docdir.$filename)){
   echo "Subida realizada";
    if (@opendir($dsdir)){
        $fp=fopen($dsdir.$carpeta, "a+");
        fwrite($fp, $dsccontent);
        fclose($fp);
        echo "Añadimos descripción introducida<br>";
        echo "al archivo LOCAL DSC/descripciones.dsc";
        
    }
    else {
        mkdir($dsdir,0777);
        chmod($dsdir,0777);
       $fp=fopen($dsdir, "a+");
        fwrite($fp, $dsccontent);
        fclose($fp);
        echo "Añadimos descripción introducida<br>";
        echo "al archivo LOCAL DSC/descripciones.dsc";
    }
}
}