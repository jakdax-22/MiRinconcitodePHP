<?php
define ("PrecioFrenos" , 100);
define ("PrecioAceite" , 10);
define ("PrecioRuedas" , 4) ;
$frenos=$_POST['frenos'];
$aceite=$_POST['aceite'];
$ruedas=$_POST['ruedas'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$importe=PrecioRuedas * $ruedas + PrecioAceite * $aceite + PrecioFrenos * $frenos;

echo "<h2>Escritura en fichero carpeta PETICIONES</h2>";
echo "<br>";
echo "Su peticion Sr/a $nombre es la siguiente:<br>";
echo "$frenos frenos.<br>";
echo "$aceite latas de aceite.<br>";
echo "$ruedas ruedas.<br>";
echo "Importe total: $importe<br>";
echo "Intentamos volcar la información<br>";
echo "--------------<br>";
$filename="./peticiones2_4/encargos.txt";
$fopen= fopen($filename, "a+");

if ($fopen){
$hoy= getdate();
$fecha= $hoy['mday'] . "/" . $hoy['month'] . "/" . $hoy['year'];
@fwrite($fopen,"$hoy\t$nombre\t$direccion\t$frenos\t$aceite\t$ruedas\n");
echo "Escrita la información en archivo petic2_4<br><br>";
echo "$filename de  petic2_4";
fclose($fopen);
}
else{
    echo "Error";
}



