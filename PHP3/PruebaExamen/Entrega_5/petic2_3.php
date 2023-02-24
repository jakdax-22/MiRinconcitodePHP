<?php
echo "<h2>Escritura datos Formulario en archivo</h2>";
echo "<br><b>Incluye control error en apertura y escritura de fichero</b>";
echo "<br><br> Intentando volcar la información en el archivo...<br>";
$hoy= getdate();
$fecha= $hoy[mday] . "/" . $hoy[mon] . "/" . $hoy[year];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$file="encargos2_3.txt";
$fopen= fopen($file, "a+");
if ($fopen){
$fwrite=fwrite($fopen,"$fecha\t$nombre\t$direccion\n");
echo "Se ha esctito la info en el archivo";

}
else {
    echo "el archivo no existe";
}
