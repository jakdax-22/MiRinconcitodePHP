<?php
$personas = array ("enrique", "ivan","alex","juan");
$cadena = reset ($personas);
echo "El vector de cadenas con WHILE-RESET-NEXT:<br>";
while ($cadena)
{
    echo $cadena;
    $cadena = next($personas);
    echo "<br>";
}

