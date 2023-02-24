<?php
echo "Asignamos valores a las variables:<br>";
$a=10;
$b=20;
'$a=10<br>';
'$b=20<br>';
function suma($num1,$num2)
{
   $suma=$num1+$num2;
   return $suma;
}
echo "A continuación hacemos la llamada a la función<br>";
echo "La suma de " . $a . " y " . $b . " es " . suma($a,$b);

