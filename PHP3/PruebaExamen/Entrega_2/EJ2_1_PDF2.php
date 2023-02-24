<?php
$num=$_POST["num"];
$dolar=1.13;


if (empty($num)){
    echo "<h3> Conversion Con Control de errores</h3>";
    echo "<br>";
    echo "<h3>Error: No hay valor</h3>";    
} elseif ($num < 0){
    echo "<h3> Conversion Con Control de errores</h3>";
    echo "<h3>Opps...</h3>";
    echo "<h3>Error: $num es Valor Negativo</h3>";
} else {
    $total=$num * $dolar;
    echo "<h3> Conversion Con Control de errores</h3>";
    echo "<br>";
    echo "<h3> Realizamos la conversion a US Dollars</h3>";
    echo "<br>";
    echo "Usted indico la siguiente informacion:";
    echo "<br>";
    echo "Cantidad= $num Euros";
    echo "<br>";
    echo "Resultado de la conversion = $total US Dollars";
}
?>

