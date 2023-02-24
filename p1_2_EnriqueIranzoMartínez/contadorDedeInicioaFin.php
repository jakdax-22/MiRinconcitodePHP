<table border="1" width="300">


<?php
$valor= 0;
$max= 1000;
$incremento = 4;

while ($valor<=$max)
{
    echo "<tr><td><center>$valor</center></td></tr>";
    $valor = $valor + $incremento;
}
?>
</table>