<table border="1" width="500">
    

    <th colspan="2"><center><b>Datos Personales</b></center></th>

<?php
include ("datPersonales.php");
$array = array ($nom,$cognoms,$edat,$numero,$nom2,$cognoms2,$edat2,$numero2);
echo "<tr><td><center><b>Nombre</b></center></td>";
echo "<td><center>$array[0]</center></td></tr>";
echo "<tr><td><center><b>Apellidos</b></center></td>";
echo "<td><center>$array[1]</center></td></tr>";
echo "<tr><td><center><b>Edad</b></center></td>";
echo "<td><center>$array[2]</center></td></tr>";
echo "<tr><td><center><b>Telefono</b></center></td>";
echo "<td><center>$array[3]</center></td></tr>";
echo "<tr><td><center><b>Nombre</b></center></td>";
echo "<td><center>$array[4]</center></td></tr>";
echo "<tr><td><center><b>Apellidos</b></center></td>";
echo "<td><center>$array[5]</center></td></tr>";
echo "<tr><td><center><b>Edad</b></center></td>";
echo "<td><center>$array[6]</center></td></tr>";
echo "<tr><td><center><b>Telefono</b></center></td>";
echo "<td><center>$array[7]</center></td></tr>";
?>
</table>
