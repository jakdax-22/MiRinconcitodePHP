<html>
    <body>
        <b>Borrar un registro</b><p/>
        <form name="borrar" action="delete.php" method="post">
            <select name="registro">
                <?php
                //Datos de conexión mysql
                $server="localhost";
                $user="root";
                $pass="root";
                $db="bd1_iaw";
                $conn= mysqli_connect($server, $user, $pass, $db);
                $sql="SELECT * FROM clientes_iaw";
                if ($select=mysqli_query($conn, $sql)){
                    while ($row= mysqli_fetch_assoc($select)){
                        echo "<option value='" .$row['nombre'] ."'>" .$row['nombre'] ."</option>"; 
                    }
                }
                echo "</select><p/>";
                ?>
                <input type="submit" value="borrar" name="boton">
        <?php
        @$registro=$_REQUEST['registro'];
        @$boton=$_REQUEST['boton'];
        if (isset($boton)){
            $borrar="DELETE FROM clientes_iaw WHERE nombre='$registro'";
            if (mysqli_query($conn, $borrar)){
                echo "Registro borrado con éxito";
            }
            //Si hay un error:
            else{
                echo "Error: (" .mysqli_errno($conn) .") " .mysqli_error($conn);
            }
        }
        mysqli_close($conn);
        
        echo "</p>";
        
        echo "<table border=1>";
        echo "<tr>";
        echo "<td><a href='Formu_DML.html'>Volver al formulario</td>";
        echo "</tr>";
        echo "</table>";

        
        ?>
    </body>
</html>