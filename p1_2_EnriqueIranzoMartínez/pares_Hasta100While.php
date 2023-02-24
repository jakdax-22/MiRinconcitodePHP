<table border="1" width="300">
    <tr><td><b><center>Números pares</center></b></td></tr>
<?php
$valor = 0;
while ($valor<=100)
 {
    $valor ++;
    if ($valor % 2 == 0)
    {
      echo "<tr><td><center>$valor</center></td></tr>";
    }
}
?>
</table>

