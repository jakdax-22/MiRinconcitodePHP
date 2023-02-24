<?php
echo "Declara array unidimensional<br>";
$array = array (10,20,30,40,50);
$cuenta = count ($array);
$suma = 0;
echo "Numero de elementos del array = " . $cuenta . "<br>";

echo "Los elementos del array son:<br>";
foreach ($array as $valor)
{
    echo $valor;
    echo "<br>";
    $suma = $suma + $valor;
}
echo "<b>SUMA= "  . $suma . "</b>";