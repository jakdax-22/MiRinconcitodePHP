<?php
$numero=$_GET['numero'];

echo "<h3>Ver la tabla del $numero</h3>";
echo "<table>";
echo "<table border = 1 width=200";
for ($j=0;$j<=10;$j++){

echo "<tr><td>$numero X $j</td>";
echo "<td>" . $numero * $j . "</td></tr>";
}


