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
                //Datos de conexión mysql
                $server="localhost";
                $user="root";
                $pass="root";
                $db="clientesdb_iaw";
                $conn= mysqli_connect($server, $user, $pass, $db);

                $sql="SELECT * FROM articulo";
        
                if ($select=mysqli_query($conn, $sql)){
                    while ($row= mysqli_fetch_assoc($select)){

                        echo "<option value='" .$row['idArticulo'] ."'>" .$row['Descripcion'] ."</option>"; 
                    }
                
                }
                
                ?>
                </select>
                <input type="submit" value="borrar" name="butt">
        
    </body>
</html>