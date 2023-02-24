<?php
$cantidad=$_POST['cantidad'];
$boton=$_POST['button'];
$Eudol=$cantidad * 1.20;
$Doleu=$cantidad / 1.20;

echo "<h2>Conversion Euros-US Dollars en ambos sentidos</h2><br><br>";
echo "<b>Programación MODULAR</b><br><br>";

echo "Usted indicó la siguiente información";
echo "<br><br>";

if ($boton == "Eudol"){
echo "Cantidad = $cantidad Euros<br><br>";
echo "Resultado de la conversión = $Eudol";
}

else {
echo "Cantidad = $cantidad Dolares<br><br>";
echo "Resultado de la conversión = $Doleu";
}


