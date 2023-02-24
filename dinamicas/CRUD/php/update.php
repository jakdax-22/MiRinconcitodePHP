<?php

require_once "conn.php";
$conn = conexion();
$ideditar = $_POST['idupdate'];
$preguntaseditar = $_POST['preguntasupdate'];
$respuestaseditar = $_POST['respuestasupdate'];

$sql = "UPDATE preguntasrespuestas SET preguntas='$preguntaseditar',
                                       respuestas='$respuestaseditar'
                                       WHERE id='$ideditar'";
echo $result = mysqli_query($conn, $sql);
?>