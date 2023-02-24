<?php
include "funcionProductoRecursiva.php";
echo "Asignamos valores a los dos valores<br>";
$a=10;
$b=20;
echo '$a=10<br>';
echo '$b=20<br><br>';
echo "Llamada a la Funcion <b>Producto Recursivo Version 1</b><br>";
echo "El producto de $a por $b es " . productoRecV1($a, $b);
echo "<br><br>";
echo "Llamada a la Funcion <b>Producto Recursivo Version 2</b><br>";
echo "El producto de $a por $b es " . productoRecV2($a, $b);