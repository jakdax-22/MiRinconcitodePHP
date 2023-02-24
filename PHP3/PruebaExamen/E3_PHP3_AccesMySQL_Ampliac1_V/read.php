<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "bd1_iaw";

$link = mysqli_connect($hostname,$username,$password,$database);

if (!$link) {
    echo "No se ha podido acceder a la base de datos";
    
} else {
    echo "<b>lectura de la tabla</b>";
    echo "<br>";
    //SELECT
    $select2_query="SELECT * FROM clientes_iaw";
    $resultsel2=mysqli_query($link,$select2_query);
    $filas_sel2=mysqli_affected_rows($link);
    printf("", $filas_sel2);

    echo "<br>";

    // SELECT ASSOCIATIVE ARRAY


    
    while ($fila2 = mysqli_fetch_array($resultsel2, MYSQLI_ASSOC)){
        echo "<table border=1>";
    // READ ARRAY
    echo "<tr>";
    echo "<td>";
    echo $fila2['id'];
    echo "</td>";
    echo "<td>";
    echo $fila2['nombre'];
    echo "</td>";
    echo "<td>";
    echo $fila2['telefono'];
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    }
   

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