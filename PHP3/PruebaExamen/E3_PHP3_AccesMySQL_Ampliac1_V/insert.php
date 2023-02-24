<?php
$id=$_POST["id_insert"];
$cliente=$_POST["nomcli_insert"];
$tlf=$_POST["tel_insert"];
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "bd1_iaw";

$link = mysqli_connect($hostname,$username,$password,$database);

if (!$link){
    echo "No se ha podido conectar a la base de datos";
} else {
    $insert_query="INSERT INTO clientes_iaw (id,nombre,telefono )"
        . "VALUES($id,'$cliente','$tlf')";
    mysqli_query($link, $insert_query);
    printf("Filas Insertadas " . "%d\n", mysqli_affected_rows($link));
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