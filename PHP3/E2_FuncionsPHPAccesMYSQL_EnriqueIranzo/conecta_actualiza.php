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

$update_query= "UPDATE articulo"
        . "SET Descripcion='articulo_modif'"
        . "WHERE idArticulo=1";
$result= mysqli_query($link , $update_query);
$num_filas_udp= mysqli_affected_rows($link);
printf ("Affected rows (UPDATE) : %d\n" , $num_filas_udp);
mysqli_close($link);
}



