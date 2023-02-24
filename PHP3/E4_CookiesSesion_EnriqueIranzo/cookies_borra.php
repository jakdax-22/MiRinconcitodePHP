<?php

function borra_cookie($nombre_cookie)
{
if (isset($_COOKIE[$nombre_cookie])) {

    $tiempo_vida=-1;
    setcookie ($nombre_cookie);
    unset ($_COOKIE[$nombre_cookie]);
    return true;
}
else {
return false;
}
}

$nombre_cookie="contador";
$segundos=1000;
$valor=0;
echo "<br>Intentamos borrar manualmente la cookie....";
$borra= borra_cookie($nombre_cookie);
if ($borra)
{
    echo "Borrando el cookie <b>$nombre_cookie</b><br>";
    echo "Intentamos ver su contenido ... <br><br>";
    if (isset($_COOKIE[$nombre_cookie])) {
     echo "Valor del cookie: " . $_COOKIE[$nombre_cookie];
    }
     else 
        echo "No tiene contenido <br>";
}
else
    echo "No se ha podido borrar el cookie<br>";
    


