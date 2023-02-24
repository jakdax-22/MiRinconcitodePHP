<?php
include "funcionSumaProducto.php";
echo "Asignamos valores a los dos valores<br>";
$a=10;
$b=20;
echo '$a' . "=$a<br>";
echo '$b' . "=$b<br><br>";
echo "Llamada a la funcion <b>Suma</b><br>";
echo suma ($a,$b);
echo "Llamada a la función <b>Producto</b><br>";
echo producto ($a,$b);