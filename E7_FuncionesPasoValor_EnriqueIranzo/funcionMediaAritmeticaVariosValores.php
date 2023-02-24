<?php
echo "<h2>Programa Principal</h2><br>";
echo "El valor de los parámetros lo establecemos desde él.<br>";
echo "Hacemos la llamada a la función...<br><br>";
function media ()
{
echo "<h2>Función Media Aritmética</h2><br>";
$num=func_num_args();
$numbueno=$num-1;
echo "Número de argumentos utilizados: $num <br><br>";
echo "Valor de los argumentos utilizados:<br>";
echo "==================================<br>";
$array=func_get_args();
$i=0;
for ($i=0;$i<=$numbueno;$i++)
{
echo "Parámetro $i==>valor:$array[$i]<br>";
}
$f=0;
echo "<br><br>";
$suma=0;
for ($f=0;$f<=$numbueno;$f++)
{
$suma=$suma+$array[$f];
}
$media=$suma/$num;
echo "<h2>La media de dichos argumentos es : ";
return $media;
}
$a=10;
$b=20;
$c=30;
$d=40;
$e=100;
$f=200;
echo media ($a,$b,$c,$d,$e,$f,$m);
echo "</h2>";
echo "<br><br>";
echo "Ahora estoy de vuelta en Programa ppal";


