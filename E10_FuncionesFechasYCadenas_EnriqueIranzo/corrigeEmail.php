<?php
function compruebaEmail ($cadena){
$arroba=explode ("@", $cadena);
$arrobadr=explode (".", $arroba[1]);
$punto=explode (".", $cadena);
$puntiiz=explode (".", $punto[0]);
$comsin=explode(".", trim($cadena));
if (strstr($cadena,"@") && strlen ($arroba[0])>0 && strlen ($arrobadr[0]) > 0 && strlen ($punto[1]) > 0);
{
echo "Dirección a analizar:<br>";
echo "$cadena <br>";
if (strncmp ($cadena,trim($cadena), strlen(trim($cadena))) != 0){
 echo "Tiene " .strlen($cadena) . " caracteres<br/>";
echo "Se han encontrado blancos.<br/>";
echo "Los eliminamos....<p/>";
echo "Hasta ahora<br>";
echo "email=$cadena<br>";
if ($comsin[1] == "com"){
echo "Buscamos .com en email...<br>";
echo "Hemos encontrado <b>com</b><br/>";
echo "Dirección corregida: '" .$comsin[0] .".es'";
}

}
}


}
$cadena="     nombreApellido@gmail.com";
compruebaEmail($cadena);
