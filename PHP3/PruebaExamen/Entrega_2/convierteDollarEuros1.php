<?php
$euros=$_POST['cantidad'];
$dollars=$euros * 1.13;
echo"<b>Conversion sin control de errores</b><br>";
echo "<b>Ejercicio conversion a Euros-USDollars</b>";
echo "<br>Usted indicó la siguiente información:<br>";
echo "Cantidad = $euros Euros";
echo "<br>Resultado de la conversión= $dollars Dollars";

