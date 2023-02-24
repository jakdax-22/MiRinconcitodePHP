<?php
function conv_USDtoEu ($cantUSD){
echo "Resultado de la conversión = $cantUSD";  
}
function conv_EutoUSD ($cantEur){
echo "Resultado de la conversión = $cantEur";
}
function visualiza ($cant)
{
echo "Cantidad = $cant <br><br>";
}

function error_vacio ()
{
echo "No has introducido datos melón";
}
function error_negativo()
{
echo "Has introducido un valor negativo melón";
}