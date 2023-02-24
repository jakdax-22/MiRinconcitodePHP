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

if ($stmt = mysqli_prepare($link, "SELECT idArticulo FROM Articulo"
        . "WHERE Descripcion = ?"))
{
$descrip="Brujula T30";
mysqli_stmt_bind_param($stmt, "s", $descrip);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $idArt);
mysqli_stmt_fetch($stmt);
printf("%s es el idArticulo del producto %s\n" , $idArt, $descrip);
mysqli_stmt_close($stmt);
}
mysqli_close($link);
}

