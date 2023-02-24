<?php
//usar strlen ($array)
echo "Invocamos a función mostrar_impares<br>";
function mostrarimpares ($cadena){
echo "La cadena recibida como argumento era:<br>";
echo "$cadena<br>";
echo "La cadena con los caracteres impares es:<br>";
$numero=strlen ($cadena);
$cadenaimpares="";
$i=0;
while ($i<$numero)
{
if ($i%2 == 0)
{
$caracteractual=$cadena [$i];
$cadenaimpares=$cadenaimpares.$caracteractual;

}
$i++;
}
echo "<b>$cadenaimpares</b>";
}
$cadena= "A quien madruga Dios le ayuda";
echo mostrarimpares($cadena);
echo "<br><br>";
echo "Invocamos a función muestra_palabras_impares...<br>";
function muestra_palabras_impares ($cadena){
$i=0;
echo "La cadena recibida como argumento era:<br>";
echo $cadena . "<br>";
echo "La cadena con las palabras impares queda así:<br>";
$palabra=explode(" ", $cadena);
for ($i=0; $i< count($palabra); $i++){    
if ($i%2 == 0){
echo "<b>$palabra[$i] </b>"; 
}
}
}
echo muestra_palabras_impares ($cadena);