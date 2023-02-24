<!DOCTYPE html>

<html>
    <head>
        <title>Borrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <b>Borrar un registro</b><p/>
        <form name="borrar" action="borrar.php" method="post">
            <select name="registro">
                <?php
                $server="localhost";
                $user="root";
                $pass="root";
                $db="bd1_iaw";
                $link= mysqli_connect($server, $user, $pass, $db);

                $sql="SELECT * FROM clientes_iaw";
        
                if ($select=mysqli_query($link, $sql)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo "<option value='" .$row['nombre'] ."'>" .$row['nombre'] ."</option>"; 
                    }
                
                }
                echo "</select><p/>";
                ?>
                <input type="submit" value="borrar" name="butt">
        
        <?php
        
        @$registro=$_REQUEST['registro'];
        @$butt=$_REQUEST['butt'];
        
        if (isset($butt)){
            $borrar="DELETE FROM clientes_iaw WHERE nombre='$registro'";
            if (mysqli_query($link, $borrar)){
                echo "Registro borrado con éxito";
            }
            else{
                echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link);
            }
        }
        mysqli_close($link);
        ?>

<html>
    <br><br>
    <a href=".\Formu_DML.html">Volver al formulario
        
</html>

