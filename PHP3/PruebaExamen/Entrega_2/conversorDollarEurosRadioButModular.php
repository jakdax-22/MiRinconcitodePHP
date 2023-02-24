<?php
include('lib_EuroDollar.php');
$cantidad=$_POST['cantidad'];
$boton=$_POST['button'];

if (empty ($cantidad)){
echo error_vacio ();
}
elseif ($cantidad < 0){
echo error_negativo();
}
else{
echo "<h2>Conversion Euros-US Dollars en ambos sentidos</h2><br><br>";
echo "<b>Programación MODULAR</b><br><br>";

echo "Usted indicó la siguiente información";
echo "<br><br>";

$funcion1= visualiza ($cantidad);

if ($boton == "Eudol"){
    
$Eudol=$cantidad * 1.20;
$Doleu=$cantidad / 1.20;
echo conv_EutoUSD ($Eudol);
}
else {
    
$Eudol=$cantidad * 1.20;
$Doleu=$cantidad / 1.20;
echo conv_USDtoEu ($Doleu);
}
}
