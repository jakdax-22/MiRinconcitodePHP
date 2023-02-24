<?php
$basi=$_POST['Basicos'];
$espe=$_POST['Especiales'];
$orden=$_POST['opcion'];
$num=$_POST['Numero'];
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
$elementosarray=count($arraynum);
for ($i=0;$i<$elementosarray;$i++){
echo $arraynum[$i] . "<br>";
}


