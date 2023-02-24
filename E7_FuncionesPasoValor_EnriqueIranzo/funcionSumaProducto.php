<?php
echo "Asignamos valores a los dos valores<br>";
$a=10;
$b=20;
echo '$a= ' . $a . "<br>";
echo '$b= ' . $b . "<br><br>";
echo "llamada a la función <b>suma</b><br>";
function suma($num1,$num2)
{
$suma=$num1+$num2;
echo "La suma de $num1 y $num2 es  ";
return $suma;
}
echo suma($a,$b);
echo "<br><br>";
echo "Llamada a la función <b>Producto</b><br>";
function producto ($num1,$num2)
{
$producto=$num1*$num2;
echo "El producto de $num1 y $num2 es ";
return $producto;
}
echo producto($a,$b);