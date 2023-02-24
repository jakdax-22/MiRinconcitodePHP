<?php
function generaPassword ($basi,$espe){

$orden=$_POST['opcion'];
$basicos="0123456789abcefghijklmnopqrstuvwxyz";
$especiales="?)(/&$%![{}";
$bpass="";
for ($i=1;$i<=$basi;$i++){
$j=rand(0,strlen($basicos)-1);
$k= substr($basicos,$j,1);
$bpass.=$k;
}
$epass="";
for ($i=1;$i<=$espe;$i++){
$j=rand(0,strlen($especiales)-1);
$k=substr($especiales,$j,1);
$epass.=$k;
}
if ($orden=="Basicos"){
$contra=$bpass.$epass;
echo "El password generado aleatoriamente es:";
echo "$contra";
}
else{
$contra=ebpass.$bpass;
echo "El password generado aleatoriamente es:";
echo "$contra";
}
}
$basi=$_POST['Basicos'];
$espe=$_POST['Especiales'];
generaPassword($basi, $espe);