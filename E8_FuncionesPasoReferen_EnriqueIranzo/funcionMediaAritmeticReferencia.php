<?php
echo "<b>Programa Principal</b><br>";
echo "==================<br>";
echo "Establecemos el valor de los parámetros desde él<br><br>";
$a=2;
$b=4;
$c=6;
$d=8;
echo "Invocamos a la función<br>";
echo "======================<br>";
function media($a,$b,$c,$d,&$suma,&$media)
{
    $i=0;
echo "<b>Estamos en la Función Media Aritmética</b><br>";
echo "=======================================<br>";
echo "Valor de los argumentos utilizados:<br>";
echo "<ul><li>Parámetro 1 ==>$a</li></ul>";
echo "<ul><li>Parámetro 2 ==>$b</li></ul>";
echo "<ul><li>Parámetro 3 ==>$c</li></ul>";
echo "<ul><li>Parámetro 4 ==>$d</li></ul><br>";
$array=func_get_args();
for ($i=0;$i<=4;$i++)
{
$suma=$suma+$array[$i];
}
$media=$suma/4;
echo "Valor del parámetro SUMA=$suma<br>";
echo "Valor del parámetro MEDIA=$media<br>";
}
media($a,$b,$c,$d,$suma,$media);
echo "<b>Estamos de nuevo en el programa Principal</b><br>";
echo "=========================================<br>";
echo "La Suma está en el parámetro 5 y es:<b>$suma</b><br>";
echo "La Media está en el parámetro 6 y es:<b>$media</b>";
