<?php
echo "<h2>Programa Principal</h2><br>";
echo "Creamos el vector de valores.<br>";
echo "Hacemos la llamada a la función con dicho vector<br><br>";

function mediarray ()
{
$num=func_num_args();
$numargs=$num-1;
$arrayargs=func_get_args();
$i=0;
echo "<h2>Función Media Aritmética con array</h2><br>";
echo "Número de elementos del array recibido: $num<br><br>";
echo "El contenido del array recibido es:<br>";
echo "Array(";
for ($i=0;$i<=$numargs;$i++)
{
 echo "[$i]=>$arrayargs[$i] ";
}
echo")";
$f=0;
$suma=0;
for ($f=0;$f<=$numargs;$f++){
$suma=$suma+$arrayargs[$f];}
$media=$suma/$num;
echo "<br><br>";
echo "<b>La media de dichos argumentos es: ";
return $media;   
}
$a=10;
$b=1000;
$c=9000000;
$d=1;
$e=9865433;
$f=0;
echo mediarray($a,$b,$c,$d,$e,$f);

