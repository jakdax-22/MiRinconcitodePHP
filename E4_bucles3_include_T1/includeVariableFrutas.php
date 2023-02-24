<table border="1" width="500">
    <tr><td><center><b>Variable</b></center></td>
<td><center><b>Valor</b></center></td></tr>
<?php

echo "<b>El contenido de las variables almacenadas es:</b>";
include ("varsFruta.php");
 echo "<tr><td><center>Fruta</center></td>";
  echo "<td><center>$fruita</center></td></tr>";
   echo "<tr><td><center>Tamaño</center></td>";
    echo "<td><center>$Tamaño</center></td></tr>";
     echo "<tr><td><center>Color</center></td>";
 echo "<td><center>$color</center></td></tr>";
  echo "<tr><td><center>Posición</center></td>";
   echo "<td><center>$posicion</center></td></tr>";
?>
</table>