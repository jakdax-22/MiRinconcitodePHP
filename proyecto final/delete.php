<?php
$id = $_GET['id'];
$server = "localhost";
$user = "root";
$pass = "";
$db = "preguntasrespuestas";
echo $id;

//$conn = mysqli_connect($server, $user, $pass, $db);
//$sql = "DELETE FROM preguntasrespuestas WHERE id=$id";
//if (@$conn) {
//    if (@mysqli_query(@$conn, @$sql)) {
//        echo "Todo correcto, fila borrada";
//    } else {
//        echo "Error: (" . mysqli_errno($conn) . ")" . mysqli_error($conn);
//    }
//}
//@mysqli_close($conn);
