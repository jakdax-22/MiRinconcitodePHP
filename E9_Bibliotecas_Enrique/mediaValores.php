<?php
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


