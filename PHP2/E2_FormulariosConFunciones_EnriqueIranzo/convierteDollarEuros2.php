<?php
$num=$_GET['euros'];

if ($num<0){
echo "<b> Conversión Con Control de errores<br>";
echo "Opps...<br>";
echo "error $num es Valor negativo</b>";
}
elseif (empty ($num)){
echo "<b>Conversión Con Control de errores<br>";
echo "Error:No hay valor";
}
else{
$dollars=1.13;
$res=$num*$dollars;
echo"<h4>Conversión sin control de errores</h4>";
echo "<b>Realizamos la conversión a US Dollars</b><p/>";
echo "Usted indicó la siguiente información<p/>";
echo "Cantidad = $num Euros<p/>";
echo "Resultado de la conversión = $res US Dollars";
}
