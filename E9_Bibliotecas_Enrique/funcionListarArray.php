<?php
function listarVectorTabla ($array){
?>
<table border="1" width="500">
<?php
$maximo= count($array);
$maximobueno=$maximo-1;
echo "visualiza en forma de tabla";
echo "<tr><td>ELEMENTO</td>";
echo "<td>VALOR</td></tr>";
for ($i=0;$i<=$maximobueno;$i++){
echo "<tr><td>$i</td><td>$array[$i]</td></tr>";
} 
?>
  </table>
<?php
}
?>

