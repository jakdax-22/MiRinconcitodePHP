<table border="1" width="500">
<?php
$personas ["Kike"] ="Iranzo";
$personas["Ivan"] = "Marin";
$personas["Alex"] = "Prodan";
$personas["Alfredo"] = "Perez";
$personas ["Charter"] = "Man";
echo "<h2>Vectores Asociativos</h2>";
echo "<h3>Visualizamos con una tabla</h3>";
echo "Recorremos el vector creado<br>";
echo "Construimos una tabla con sus elementos<br>";
echo "<tr><td><b><center>Apellido</center></b></td>";
echo "<td><b><center>Nombre</center></b></td></tr>";
while (list($nombre,$apellido)=each($personas))
{
 echo "<tr><td><center>$apellido</center></td>";
 echo "<td><center>$nombre</center></td></tr>";
}
?>

</table>