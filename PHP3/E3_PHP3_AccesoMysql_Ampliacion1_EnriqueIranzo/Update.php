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

$updated_query="UPDATE Clientes_iaw "
        . "SET nombre='$nom' " 
        . "WHERE id=$id"
         . "SET telefono='$tel'"
               . "WHERE id=$id";  
$result =mysqli_query($link,$updated_query);
$num_filas= mysqli_affected_rows($link);
printf("Filas modificadas = %d\n" , $num_filas );
mysqli_close($link);


}
?>

<html>
    <br><br>
    <a href=".\Formu_DML.html">Volver al formulario
        
</html>
