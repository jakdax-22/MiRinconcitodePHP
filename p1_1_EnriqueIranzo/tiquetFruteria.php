<?php
define ("precioJ" , 3.5);
define ("precioP" , 0.4);
define ("precioT" , 1);
define ("precioM" , 1.2);
define ("precioU" , 2.5);
$Judias = 1;
$Patatas = 0;
$Tomates = 3;
$Manzanas = 0;
$Uvas = 5;
$J="JUDIAS";
$P="PATATAS";
$T="TOMATES";
$M="MANZANAS";
$U="UVAS";
$TotalJ = precioJ * $Judias;
$TotalP = precioP * $Patatas;
$TotalT = precioT * $Tomates;
$TotalM = precioM * $Manzanas;
$TotalU = precioU * $Uvas;
$Total = $TotalJ + $TotalM + $TotalP + $TotalT + $TotalU;

echo "<b>PRODUCTO-PRECIO Euros/KG-PESO-PRECIO concepto</b><br><br>";
echo "$J---------" . number_format(precioJ, 2);
echo "---------" . number_format($Judias, 2);
echo "---------" ;
echo number_format($TotalJ, 2);
echo "<br>";
echo "$P---------" . number_format(precioP, 2);
echo "---------" . number_format($Patatas, 2);
echo "---------" . number_format($TotalP, 2);
echo "<br>";
echo "$T---------" . number_format(precioT, 2);
echo "---------" . number_format($Tomates, 2);
echo "---------" . number_format($TotalT, 2);
echo "<br>";
echo "$M---------" . number_format(precioM, 2);
echo "---------" . number_format($Manzanas, 2);
echo "---------" . number_format($TotalM, 2);
echo "<br>";
echo "$U---------" . number_format(precioU, 2);
echo "---------" . number_format($Uvas, 2);
echo "---------" . number_format($TotalU, 2);
echo "<br><br>";
echo "<b>TOTAL: " . $Total;
echo "</b><br>";
echo "Gracias por su compra."
?>