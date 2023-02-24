<?php
function generaArrayPasswords ($num,$basi,$espe){
$orden=$_POST['opcion'];
$basicos="0123456789abcefghijklmnopqrstuvwxyz";
$especiales="?)(/&$%![{}";
for ($numero=0;$numero<$num;$numero++){
      $contra="";
      $bpass="";
      $epass="";
    for ($i=1;$i<=$basi;$i++){
        $j=rand(0,strlen($basicos)-1);
        $k= substr($basicos,$j,1);
        $bpass.=$k;
    }
    for ($i=1;$i<=$espe;$i++){
        $j=rand(0,strlen($especiales)-1);
        $k=substr($especiales,$j,1);
        $epass.=$k;
    }
    if ($orden=="Basicos"){
        $contra=$bpass.$epass;
    }
    else{
         $contra=$epass.$bpass;
    }
 
    $arraynum[$numero]=$contra;
    $bpass="";
    $espPass="";

 
}
    return $arraynum;
}
$basi=$_POST['Basicos'];
$espe=$_POST['Especiales'];
$num=$_POST['Numero'];
$contraseña= generaArrayPasswords($num, $basi, $espe);
for ($i=0;$i<$num;$i++){
echo $arraynum[$i] . "<br>";
}

