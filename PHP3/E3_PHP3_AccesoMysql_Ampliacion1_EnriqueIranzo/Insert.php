<?php
$hostname="localhost";
$user="root";
$password="root";
$database="bd1_iaw";
$id=$_POST ["identificador"];
$nom=$_POST ["nombrecliente"];
$tel=$_POST ["telefono"];

$link= mysqli_connect($hostname, $user, $password, $database);

if (!$link){
echo "Error, no se pudo conectar a la BD" . PHP_EOL;
echo "errno de depuración:" . mysqli_connect_errno(). "<br>";
}
else 
{
echo "Conexión exitosa<br>";
echo "<b>BD: ".$database."</b><br><br>";

$insert_query="INSERT INTO Clientes_iaw (id,nombre,telefono)"
        . " VALUES ($id,'$nom','$tel')";
mysqli_query($link, $insert_query);

        printf("Filas insertadas: %d\n" , mysqli_affected_rows($link));
        mysqli_close($link);
}
?>

<html>
    <br><br>
    <a href=".\Formu_DML.html">Volver al formulario
        
</html>

