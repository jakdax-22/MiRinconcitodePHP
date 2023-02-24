<html>
    <body>
        <form action="Gest_AsignaturasSinFunciones.php" method="post">
        <table border="1">
            <tr>
                <td><h3>Familia Profesional</h3></td>
                <td><h3>Grado</h3></td>
                <td><h3>Ciclo</h3></td>
                <td><h3>Modulo</h3></td>
            </tr>
            <tr>
                <td>
                <label for="famProfesional">Seleccione Familia</label>

                <select name="famProfesional" id="famProfesional">
                <?php
                $server="localhost";
                $user="root";
                $pass="root";
                $db="gest_asignaturasdb";

                $link=mysqli_connect($server,$user,$pass,$db);
                $sql="SELECT * FROM famprofesional";
                $result=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<option value=".$row["nomFamilia"].'">'.$row["nomFamilia"].'</option>';
                }
                ?>
                </select>
                </td>

                <td>
                <select name="grado" id="grado">
                <?php
                $server="localhost";
                $user="root";
                $pass="root";
                $db="gest_asignaturasdb";

                $link=mysqli_connect($server,$user,$pass,$db);
                $sql="SELECT * FROM grado";
                $result=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<option value=".$row["nomGrado"].'">'.$row["nomGrado"].'</option>';
                }
                ?>
                </td>

                <td>
                <select name="ciclo" id="ciclo">
                <?php
                $server="localhost";
                $user="root";
                $pass="root";
                $db="gest_asignaturasdb";

                $link=mysqli_connect($server,$user,$pass,$db);
                $sql="SELECT * FROM ciclo";
                $result=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<option value=".$row["nomCiclo"].'">'.$row["nomCiclo"].'</option>';
                }
                ?>
                </td>

                <td>
                <select name="modulo" id="modulo">
                <?php
                $server="localhost";
                $user="root";
                $pass="root";
                $db="gest_asignaturasdb";

                $link=mysqli_connect($server,$user,$pass,$db);
                $sql="SELECT * FROM modulo";
                $result=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<option value=".$row["nomModulo"].'">'.$row["nomModulo"].'</option>';
                }
                ?>
                </tr>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
        </form>
    </body>
</html>