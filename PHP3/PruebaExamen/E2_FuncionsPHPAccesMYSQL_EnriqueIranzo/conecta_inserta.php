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

$insert_query="INSERT INTO articulo (idArticulo,Descripcion,Precio,Stock )"
        . "VALUES (12,'Articulo12',12,12)";
mysqli_query($link, $insert_query);
printf ("Affected rows (INSERT): %d\n" , mysqli_affected_rows($link));
mysqli_close($link);
}

