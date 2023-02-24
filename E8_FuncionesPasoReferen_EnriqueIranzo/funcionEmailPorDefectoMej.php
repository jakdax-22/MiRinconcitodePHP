<?php
echo "Creando email...<br>";
function creaemail ($nom1="usuario",$nom2="@",$nom3="gmail.com")
{
$argumentos= func_num_args();
if ($argumentos==3)
{
echo "Perfecto, tu email será<br> $nom1$nom2$nom3";
}
elseif ($argumentos==2)
{
echo "Te falta el tercer argumento y lo hemos añadido por defecto: <br>";
$cad=$nom1 . $nom2 . $nom3;
return $cad;
}
elseif ($argumentos===1)
{
echo "Te falta el segundo y tercer argumento y los hemos añadido por defecto: <br>";
$cad=$nom1 . $nom2 . $nom3;
return $cad;
}
elseif ($argumentos===0)
{
echo "Te faltan todos los argumentos y los hemos añadido por defecto: <br>";
$cad=$nom1 . $nom2 . $nom3;
return $cad;
}
}
$arg1="enrique";
$arg2="@";
$arg3="gmail.com";
echo creaemail ();