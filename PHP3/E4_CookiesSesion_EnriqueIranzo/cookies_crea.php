<?php

$segundosaño=365 * 24 * 60 * 60;
$fecha_expiraciones= time () + $segundosaño;
if (isset($_COOKIE['contador']))
{
 $veces=$_COOKIE['contador'] + 1;
 setcookie ('contador', $veces, $fecha_expiraciones);
 $mensaje = 'Numero de visitas a la web: ' . $_COOKIE['contador'];
 echo $mensaje . '<br';
}
else
{
$veces=1;
setcookie('contador', $veces, $fecha_expiraciones);
$mensaje = 'Has visitado la página por primera vez';
echo $mensaje . '<br>';
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title> Ejemplo de cookies </title>
    </head>
    <body>
        <h4> Ejemplo de cookies en página web </h4>
    </body>
</html>