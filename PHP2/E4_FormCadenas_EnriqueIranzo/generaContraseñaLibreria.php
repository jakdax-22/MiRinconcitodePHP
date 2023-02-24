<?php
include 'lib_generaContraseña.php';
$basi=$_POST['Basicos'];
$espe=$_POST['Especiales'];
generaPassword($basi, $espe);

