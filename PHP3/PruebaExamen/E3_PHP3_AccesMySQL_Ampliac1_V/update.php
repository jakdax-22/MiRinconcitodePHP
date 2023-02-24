<?php
$id=$_POST["id_update"];
$cliente=$_POST["nomcli_update"];
$tlf=$_POST["tel_update"];
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "bd1_iaw";

$link = mysqli_connect($hostname,$username,$password,$database);

if (!$link){
    echo "No se ha podido conectar a la base de datos";
} else {
    $update="UPDATE clientes_iaw "
            . "SET nombre='$cliente', telefono='$tlf' "
            . "WHERE id=$id";
    $resultado=mysqli_query($link,$update);
    $filas_upd=mysqli_affected_rows($link);
    printf("Affected rows (UPDATE): %d\n", $filas_upd);
    mysqli_close($link);
}
echo "<br>";
echo "<br>";
echo "
<table border=1>
<tr>
<td><a href= ./Formu_DML.html>Volver a Formulario</a></td
</tr>
</table>";