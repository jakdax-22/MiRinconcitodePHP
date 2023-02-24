

<?php

function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "preguntasrespuestas";

    $conn = mysqli_connect($servidor, $usuario, $password, $db);

    return $conn;
}
?>