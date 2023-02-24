
<?php 
	require_once "conn.php";
	$conexion=conexion();
	$id=$_POST['iddelete'];

	$sql="DELETE from preguntasrespuestas where id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>