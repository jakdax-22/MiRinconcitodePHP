<?php
echo "<b>Programa Principal</b><br>";
echo "El valor del IVA lo establecemos desde él<br>";
$iva=0.21;
echo "El valor del IVA es $iva<br>";
echo "invocamos a la función<br><br>";
function iva($a,$iva,&$res)
{
$res=$a + ($a*$iva);
}
$a=100;
$operación= iva($a,$iva,$res);
echo "El precio INICIAL sin IVA es:$a<br>";
echo "El precio con IVA es:$res";


