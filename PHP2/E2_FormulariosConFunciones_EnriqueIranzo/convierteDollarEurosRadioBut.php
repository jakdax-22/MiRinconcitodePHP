<?php

$cant=$_GET['cantidad'];
$opc=$_GET['moneda'];
if ($cant > 0){
if ($opc == "€"){
echo "<b>Realizamos la conversión a US Dollars</b><p/>";
echo "Usted indicó la siguiente información<p/>";
$cambio=1.13;
$res=$cant*$cambio;
if ($cant == 1){
echo "Cantidad= $cant euro<p/>"; 
}
else {
echo "Cantidad= $cant euros<p/>";
}      
echo "Resultado de la conversión = $res US Dollars";
}
else{
echo "<b>Realizamos la conversión a Euros</b><p/>";
echo "Usted indicó la siguiente información<p/>";
$cambio=0.88;
$res=$cant*$cambio;
echo "Cantidad= $cant US Dollar<p/>";
echo "Resultado de la conversión = $res Euros";        
}
}
elseif ($cant<0){
echo "<b>Opps...</b><p/>";
echo "<b>Error: $cant es Valor negativo</b>";
}
else{
echo "<b>Error: No hay valor</b>";
}

