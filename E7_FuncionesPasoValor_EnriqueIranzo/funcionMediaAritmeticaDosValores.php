<?php
echo "<h2>Programa Principal</h2><br>";
echo "El valor de los parámetros lo establecemos desde él.<br>";
echo "Hacemos la llamada a la función.<br><br>";
echo "<b>Función Media Aritmética de Dos valores<br>";
$num=2;
echo "Número de argumentos utilizados: " . $num . "<br><br>";
echo "Valor de los argumentos utilizados:<br>";
echo "==================================<br>";
$a=10;
$b=20;
echo "argumento 1: " . $a . "<br>";
echo "argumento 2: " . $b . "<br>";
echo "ahora estoy en el Ppal";

function media($num1,$num2,$numero)
{
$media=($num1+$num2)/$numero;
 echo "<h2>La media de dichos argumentos es: ";
return $media;
echo "</h2>";
}
echo media($a,$b,$num);