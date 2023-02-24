<?php
function productoValores ()
{
echo "<b>Función Producto</b><br>";
$numero= func_num_args();
$array=func_get_args();
$i=0;
$multiplicacion=1;
echo "Numero de elementos a multiplicar:$numero<br><br>";
echo "Valores:<br>";
echo "=======<br>";
echo "(";
for ($i=0;$i<$numero;$i++)
{
echo "$array[$i],";
$multiplicacion=$multiplicacion*$array[$i];
}
echo ")<br><br>";
echo "<b>El producto es: $multiplicacion</b>";
}
