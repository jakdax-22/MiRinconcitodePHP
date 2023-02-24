<?php
echo "Asignamos valores a dos valores<br>";
function suma ($a,$b,&$operacion)
{
$operacion=$a+$b;
}
$a=10;
$b=20;
$suma=suma ($a,$b,$operacion);
echo '$a' . "=$a<br>";
echo '$b' . "=$b<br><br>";
echo "Llamada a la función suma(a,b,resultado)<br>";
echo "El resultado se obtiene en el parámetro resultado,pasado por referencia<br>";
echo "La suma de $a y $b es $operacion";


