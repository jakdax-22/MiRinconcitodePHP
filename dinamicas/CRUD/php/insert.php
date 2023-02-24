<?php

require_once "conn.php";
$conn = conexion();
$preguntas = $_POST['preguntas'];
$respuestas = $_POST['respuestas'];

$sql = "INSERT INTO preguntasrespuestas (preguntas,respuestas)"
        . "values ('$preguntas','$respuestas')";
echo $result = mysqli_query($conn, $sql);
?>