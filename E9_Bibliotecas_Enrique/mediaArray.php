<?php
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

