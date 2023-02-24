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

$delete_record_query="DELETE FROM articulo"
        . "WHERE idArticulo=2";
$resultDelete= mysqli_query($link, $delete_record_query);
$numRegistrosBorrados= mysqli_affected_rows($link);
echo "Registros Borrados" . $numRegistrosBorrados;
mysqli_close($link);
}


