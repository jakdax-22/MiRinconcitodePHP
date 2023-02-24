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

$prepared_insert_query="INSERT INTO articulo"
        ."(idArticulo,Descripcion,Precio,Stock)"
        ."VALUES(?,?,?,?)";
$sentencia= mysqli_prepare($link, $prepared_insert_query);
mysqli_stmt_bind_param( $sentencia, "isid",$val1,$val2,$val3,$val4);

$val1=14;
$val2="Articulo12";
$val3=133.0;
$val4=13;
$res= mysqli_execute($sentencia);
$num_Registros= mysqli_affected_rows($link);
echo "Registros insertados:" . $num_Registros;
mysqli_stmt_close($sentencia);
mysqli_close($link);
}


