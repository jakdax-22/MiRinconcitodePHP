<table border="1" width="500">

    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "preguntasrespuestas";
    $busca = $_GET['busca'];
    $conn = mysqli_connect($server, $user, $pass, $db);
    $opcion = $_GET['busqueda'];
    ?>
    <form name="form_faq" action="insert.php">
        <tr><td colspan="3"><center><input type="submit" value="nuevo" name="bot_env" /></center></td></tr>
    </form>

    <?php
    $array = array(
    );
    if ($opcion == "respuesta") {
        $sql = "SELECT * FROM preguntasrespuestas WHERE respuestas LIKE '%$busca%'";
    } elseif ($opcion == "pregunta") {
        $sql = "SELECT * FROM preguntasrespuestas WHERE preguntas LIKE '%$busca%'";
    }

    if ($conn) {
        if ($select = mysqli_query($conn, $sql)) {
            while ($rows = mysqli_fetch_assoc($select)) {
                $preg = $rows['preguntas'];
                $resp = $rows['respuestas'];
                $id = $rows['id'];

                echo "<tr><td>" . $rows['id'] . "</td>";
                echo "<td>" . $rows['preguntas'] . "</td>";
                echo "<td>" . $rows['respuestas']
                ?>
                <td><form name="form_faq2" action="delete.php">
                        <input type="hidden" name="id" value=<?php $rows['id'] ?> />
                        <input type="submit"  value="eliminar" name="bot_env2" />
                        

                    </form>
                    <br><form name="form_faq3" action="update.php">
                        <input type="hidden" name="id" value=<?php "$id" ?> />
                        <input type="submit" value="modificar" name="bot_env3" />
                    </form>
            <?php
            "</td></tr>";
        }
    }
}
mysqli_close($conn);
?>
</table>