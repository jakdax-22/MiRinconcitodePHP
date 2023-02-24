<?php
echo "Programa principal<br>";
echo "Invocamos a la función<br><br>";
$a=100;
function precio($a,&$coniva,$iva=0.21)
{
$coniva=$a+($a*$iva);   
}
$iva= precio($a, $coniva, $iva=0.21);
echo "El precio INICIAL sin IVA es:<b>$a</b><br>";
echo "El precio con iva es:<b>$coniva</b>";
