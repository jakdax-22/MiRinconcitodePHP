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
printf("Affected rows (SELECT):" . $num_filas);
echo "<br>";
$rows= mysqli_fetch_all($result);
foreach ($rows as $fila_actual)
{
print_r($fila_actual);
echo "<br>";
}
mysqli_close($link);
}
