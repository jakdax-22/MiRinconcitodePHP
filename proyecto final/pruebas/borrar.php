<?php 
include("function.php");
$id = $_GET['id'];
delete('preguntasrespuestas','id',$id);
header("location:index.php");
?>

