
<?php 
include './funcionListarArray.php';
//include './ListarArrayNoOrdenada.php';
include "ListarArrayNoOrdenada.php";
$array=array (10,20,30,40);
echo listarVectorTabla($array);
echo listarVectorNoOrdenada($array);

?>