<?php
define ("PrecioFrenos" , 100);
define ("PrecioAceite" , 10);
define ("PrecioRuedas" , 4) ;
$numFrenos = 10;
$numAceite = 1;
$numRuedas = 1;
$totalArt = $numAceite + $numFrenos + $numRuedas;
$subtotal = (PrecioFrenos * $numFrenos) + (PrecioAceite * $numAceite) + (PrecioRuedas * $numRuedas);
$Total = $subtotal + ($subtotal * 21 / 100);
echo "Precio de los artículos<br>";
echo "PRECIOFRENOS= " .PrecioFrenos;
echo "PRECIOACEITE = " . PrecioAceite;
echo "PRECIORUEDAS = " . PrecioRuedas;
echo "Suponiendo que hemos comprado las siguientes unidades:<br>";

echo "numFrenos= " . $numFrenos;
echo "<br>";
echo "numAceite= " . $numAceite;
echo "<br>";
echo "numRuedas= " . $numRuedas;
echo "<br><br>";
echo "<h2>PRECIOS DE LOS ARTÍCULOS</h2>";
echo "PRECIOFRENOS= " . PrecioFrenos;
echo "<br>";
echo "PRECIOACEITE= " . PrecioAceite;
echo "<br>";
echo "PRECIORUEDAS= " . PrecioRuedas;
echo "<br><br>";

if ($numAceite == 0 && $numFrenos == 0 && $numRuedas == 0)
{
    echo "No comprado: aceite,frenos,ruedas<br>";
    echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
elseif ($numAceite == 0 && $numFrenos == 0)
{
    echo "No comprados: aceite y frenos<br>";
echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
elseif ($numAceite == 0 && $numRuedas == 0)
{ echo "No comprados: aceite y ruedas<br>";
echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
elseif ($numFrenos == 0 && $numRuedas == 0)
{
     echo "No comprados: ruedas y frenos<br>";
echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
elseif ($numAceite == 0)
{
    echo "No comprado: aceite<br>";
echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
elseif ($numFrenos == 0)
{
    echo "No comprado: frenos<br>";
echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
elseif ($numRuedas == 0)
{
    echo "No comprado: ruedas<br>";
echo "<h2>La petición ha de contener todos los tipos de artículos</h2>";
}
else 
{
    echo "<b> Se han comprado todos los artículos</b><br>";
    echo "Su petición es la siguiente:<br>";
    echo "Frenos: " . $numFrenos;
    echo "<br>";
    echo "Aceite: " . $numAceite;
    echo "<br>";
    echo "Ruedas: " . $numRuedas;
    echo "<br><br>";
    echo "<b>Número de elementos solicitados:" . $totalArt;
    echo "</b><br>";
    echo "<b>Subtotal: " . $subtotal;
    echo " euros</b><br>";
    echo "<b>Total con IVA: " . $Total;
     echo " euros</b><br>";
   
}
?>



