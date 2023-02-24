<?php
include ("datPersonales.php");
$datosarray = array ($nom,$cognoms,$edat,$numero,$nom2,$cognoms2,$edat2,$numero2);
echo "<b> Los datos del array son:</b><br>";
foreach ($datosarray as $valor)
{
    echo $valor;
    echo "<br>";
}

