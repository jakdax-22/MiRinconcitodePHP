<table border="1" width="500">
<?php
echo "<b>Suma y media de array como tabla</b>";

$array = array (100,200,300,400,500);
$suma = $array[0] + $array[1] + $array[2] + $array[3] + $array[4];
$cuenta = count ($array);
$media = $suma / $cuenta;
echo "<tr><td><b><center>Posición</center></b></td>";
echo "<td><b><center>Valor</center></b></td></tr>";
echo "<tr><td><center>0</center></td>";
echo "<td><center>$array[0]</center></td></tr>";
echo "<tr><td><center>1</center></td>";
echo "<td><center>$array[1]</center></td></tr>";
echo "<tr><td><center>2</center></td>";
echo "<td><center>$array[2]</center></td></tr>";
echo "<tr><td><center>3</center></td>";
echo "<td><center>$array[3]</center></td></tr>";
echo "<tr><td><center>4</center></td>";
echo "<td><center>$array[4]</center></td></tr>";
echo "<tr><td><center><b>SUMA</b></center></td>";
echo "<td><center>$suma</center></td></tr>";
echo "<tr><td><center><b>MEDIA</b></center></td>";
echo "<td><center>$media</center></td></tr>";
?>
</table>


