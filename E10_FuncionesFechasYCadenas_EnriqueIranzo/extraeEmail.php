<?php
function email ($email){
echo "Email a analizar:<br>";
echo "$email<br><br>";
$numletras= strlen($email);
echo "Tiene $numletras letras<br>";
$arroba= strpos ($email,"@");
$punto= strpos ($email,".",$arroba);
if ($arroba && $punto){
$usuario=substr($email,0,$arroba);
$dominio=substr ($email,$arroba +1);
echo "Es una dirección de email válida<br><br>";
echo "El nombre de usuario es:$usuario<br>";
echo "El nombre de dominio es:$dominio";
}
else {
echo "email no válido";
}
}
$email="usuario@gmail.com";
echo email ($email);
