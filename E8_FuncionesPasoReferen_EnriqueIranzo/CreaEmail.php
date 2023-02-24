<?php
echo "Invocando a función...<br>";
function email ($a,$b,$c,&$nombre)
{
$nombre= "$a$b$c";
}
$a="enriqueiranzo";
$b="@gmail";
$c=".com";
$email= email ($a,$b,$c,$nombre);
if ($c==".com")
{
echo "Email completo es.....<br>";
echo "<b>$nombre</b>";
}
else
{
echo "extension incorrecta : <b>$c</b>";
}