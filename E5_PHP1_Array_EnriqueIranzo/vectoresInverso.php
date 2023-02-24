<?php
$personas = array ("enrique", "ivan","alex","juan");
$cadena = end ($personas);
while ($cadena)
{
    echo $cadena;
    $cadena = prev($personas);
    echo "<br>";
}
