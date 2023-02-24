<?php

$lbasc=$_POST['basicos'];
$lesp=$_POST['especiales'];
$orden=$_POST['boton'];

$basi="0123456789abcdefghijklmnopqrstuvwxyz";
$esp="?)(/&$%!][{}";

$pass1="";

for ($i=1;$i<=$lbasc;$i++){
$x=rand(0, strlen($basi)-1);
$y=substr($basi,$x,1);
$pass1.=$y;
}
$pass2="";
for ($i=1;$i<=$lesp;$i++){
$x= rand(0,strlen($esp)-1);
$y= substr($esp,$x,1);
}

if ($orden == "baesp"){
$pass=$pass1.$pass2;
echo "La contraseña es :<br>";
$pass;
 
}
else {
$pass=$pass2.$pass1;
echo "La contraseña es: <br>";
$pass;
}