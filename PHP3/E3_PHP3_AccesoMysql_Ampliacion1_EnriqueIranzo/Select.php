<table border="1" width="150">
   


<?php
$hostname="localhost";
$user="root";
$password="";
$database="bd1_iaw";
$link= mysqli_connect($hostname, $user, $password, $database);

if (!$link){
echo "Error, no se pudo conectar a la BD" . PHP_EOL;
echo "errno de depuración:" . mysqli_connect_errno(). "<br>";
}
else 
{
echo "Conexión exitosa<br>";
echo "<b>BD: ".$database."</b><br><br>";
$select_query="SELECT * FROM Clientes_iaw";
$result = mysqli_query($link, $select_query);
echo "<br>";
while ($fila_actual= mysqli_fetch_array($result, MYSQLI_ASSOC))
{
   echo "<tr><td>" . $fila_actual ['id'] . "</td></tr>";
      echo "<tr><td>" . $fila_actual ['nombre'] . "</td></tr>";
         echo "<tr><td>" . $fila_actual ['telefono'] . "</td></tr>";
}
mysqli_close($link);
}
?>

<html>
    </table>
    <br><br>
    <a href=".\Formu_DML.html">Volver al formulario
        
</html>