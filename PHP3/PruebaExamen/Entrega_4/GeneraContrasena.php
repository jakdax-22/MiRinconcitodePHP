<?php

//Recogida de variables del formulario
$LBasc=$_POST['basicos'];
$LEsp=$_POST['especiales'];
$Ord=$_POST['boton'];

//Creación de strings de carácteres
$Basicos="0123456789abcdefghijklmnopqrstuvwxyz";
$Especiales="?)(/&$%!][{}";

//Creación de string Basica y especial

$bascPass="";
for ($i=1;$i<=$LBasc;$i++){
    $x=rand(0, strlen($Basicos)-1);
    $y=substr($Basicos, $x, 1);
    $bascPass.=$y;
}

$espPass="";
for ($i=1;$i<=$LEsp;$i++){
    $x=rand(0, strlen($Especiales)-1);
    $y=substr($Especiales, $x, 1);
    $espPass.=$y;
}

//Concatenación según el input elegido
if ($Ord=="baesp"){
    $pass=$bascPass .$espPass;
    echo "<b>El password generado aleatoriamente es:<p/>";
    echo $pass ."</b>";
}

else {
    $pass=$espPass .$bascPass;
    echo "<b>El password generado aleatoriamente es:<p/>";
    echo $pass ."</b>";
}

