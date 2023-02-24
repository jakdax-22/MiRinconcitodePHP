<?php
echo "<b>Programa Principal</b><br>";
echo "El valor de los parámetros lo establecemos desde él<br>";
echo "Hacemos la llamada a la función.<br><br>";
function media ($a,$b,&$num2,$num1)
{
    echo "<h2>Función MediaValoresRefer</h2><br>";
    echo "===========================<br>";    
$num2=($a+$b)/$num1;
echo "<b>Función Media Aritmética</b><br>";
echo "Número de argumentos utilizados:$num1<br><br>";
echo "Valor de los argumentos utilizados:<br>";
echo "$a y $b<br>";
echo "No hace falta hacer Return<br>";
echo "El resultado está en num2 y es:$num2";
}
$a=10;
$b=40;
$num1=2;
$media=media($a,$b,$num2,$num1);
