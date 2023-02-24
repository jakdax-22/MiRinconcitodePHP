<?php

$hostname="localhost";
$username="root";
$password="";
$database="clientesdb_iaw";

$link= mysqli_connect($hostname,$username,$password,$database);

if (!$link) {
echo "Error: No se pudo conectar a Mysql" . PHP_EOL;
echo "errno de depuración" . mysqli_connect_errno(). "<br>";
}
else {
echo "Conexión exitosa<br>";
echo "<b>BD:" . $database . "</b><br><br>";

$select_query="SELECT * FROM articulo";
$result= mysqli_query($link, $select_query);
$num_filas= mysqli_affected_rows($link);
printf ("Affected rows (SELECT):" , $num_filas);

echo "<br>";
while ($fila_actual= mysqli_fetch_array($result, MYSQLI_ASSOC))
{
echo $fila_actual['idArticulo'] . "<br>";
echo $fila_actual['Descripcion'] . "<br>";
echo $fila_actual['Precio'] . "<br>";
echo $fila_actual['Stock'] . "<br>";
}
mysqli_close($link);
}



