<table border="1" width="500">

    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "preguntasrespuestas";
    $busca = $_GET['busca'];
    $conn = mysqli_connect($server, $user, $pass, $db);
    $sql = "SELECT preguntas,respuestas FROM preguntasrespuestas WHERE preguntas LIKE '%$busca%'";

    if ($conn) {
        if ($select = mysqli_query($conn, $sql)) {
            while ($rows = mysqli_fetch_assoc($select)) {
                echo "<tr><td>" . $rows['preguntas'] . "</td>";
                echo "<td>" . $rows['respuestas'] . "</td></tr>";
            }
        }
    }
    mysqli_close($conn);
    ?>
</table>

