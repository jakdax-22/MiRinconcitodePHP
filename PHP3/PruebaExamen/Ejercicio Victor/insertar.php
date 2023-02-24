<html>
    <h2>INSERCION EN TABLAS</h2>
    <br><form name="Alumnos" action="insertar.php" method="POST">
    <table>
        <th>Tabla Alumno</th>
        <tr><td>Nombre: </td><td><input type="text" name="nombre" value="">
        </tr><tr><td>Apellido: </td><td><input type="text" name="apellido" value="">
        <tr><td><input type="submit" name="envalumno" value="Insertar"></tr></td>
    </table>
        </form>
    <form name="inNota" method="post" action="insertar.php">
            <table>
                <tr>
                    <td>Alumno:<select name="alumno">
                            
                        <?php
                        //Conexión con base de datos
                            $server="localhost";
                            $user="root";
                            $pass="";
                            $db="notasASIR";

                            $link= mysqli_connect($server, $user, $pass, $db);
                            
                            //Consulta para sacar el desplegable
                            $alumnos= 'SELECT codAlumno, CONCAT(nombre, " ", apellido) AS "Conjunto" FROM alumno';

                                if ($result=mysqli_query($link, $alumnos)){//Si la query se ejecuta correctamente
                                    
                                    while ($row=mysqli_fetch_assoc($result)){//Mientras que haya una línea en el array
                                        //El valor del desplegable será cada iteración de la base de datos
                                        echo "<option value='" .$row['codAlumno'] ."'>" .$row['Conjunto'] ."</option>";                                
                                    }
                                }    
                            
                        ?>
                    </select>
                    </td>    
                </tr>
                <tr>
                    <td>
                    Asignatura:<select name="asignatura"> <!--Creo un desplegable con las opciones de asignatura -->
                            <?php

                                //Consulta para sacar el desplegable
                                $asignaturas= 'SELECT codAsignatura, nombre FROM asignatura';

                                if ($result=mysqli_query($link, $asignaturas)){//Si la query se ejecuta correctamente
                                    while ($row=mysqli_fetch_assoc($result)){//Mientras que haya una línea en el array
                                        //El valor del desplegable será cada iteración de la base de datos
                                        echo "<option value='" .$row['codAsignatura'] ."'>" .$row['nombre'] ."</option>";
                                    }
                                }
                                mysqli_close($link);
                            ?>
                    </select>
                    </td>
                     </tr>
                <tr>
                    <td>Nota: <input type="number" name="nota"></td>
                </tr>
                <tr>
                    <td class="center"><input type="submit" name="insertNote" value="Insertar"></td>
                </tr>
            </table>
            </form>    

           
    </body>
</html>
</html>

<?php


if (!isset($_POST['envalumno'])){
   
}
else{  
if (empty ($_POST['nombre']) || empty($_POST['apellido'])){
    
echo "El nombre o el apellido está vacío, vuelve a intentarlo";

}
elseif (!empty($_POST['nombre']) && !empty($_POST['apellido'])){
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $server="localhost";
 $user="root";
 $pass="";
 $db="notasASIR";
 
 $link= mysqli_connect($server,$user,$pass,$db);
 
 if (!$link){
 echo "Error:No se puede conectar a MySQL " . PHP_EOL;
 echo "Errno de depuración:" . mysqli_connect_errno() . "<br>";
 }
 else {
     $insert_query="INSERT INTO alumno (nombre,apellido)"
             . "VALUES('$nombre','$apellido')";
     $mysqli_query=mysqli_query($link,$insert_query);
     if ($mysqli_query){
     echo "Valor introducido con éxito";
     }
     
 }
 
}
else{
echo "Error:No se puede conectar a MySQL " . PHP_EOL;
 echo "Errno de depuración:" . mysqli_connect_errno() . "<br>";
 
 

}
}
 if (!isset ($_POST['insertNote'])){
 
 }
 else{
if (!empty($_POST['alumno']) && !empty($_POST['asignatura']) && !empty($_POST['nota'])){
$alumno=$_POST['alumno'];
$asignatura=$_POST['asignatura'];
$nota=$_POST['nota'];
 $server="localhost";
 $user="root";
 $pass="";
 $db="notasASIR";
 
 $link=mysqli_connect($server, $user, $pass, $db);
if ($link){
$query="INSERT INTO alumnoNotaAsignatura (nota,codAlumno,codAsignatura) VALUES ('$nota', $alumno, $asignatura)";
if (mysqli_query($link, $query)){
    echo "Nota insertada";
    
}
else{
echo "Error:No se puede conectar a MySQL " . PHP_EOL;
echo "Errno de depuración:" . mysqli_connect_errno() . "<br>";}
}
else{
echo "Error:No se puede conectar a MySQL " . PHP_EOL;
echo "Errno de depuración:" . mysqli_connect_errno() . "<br>";}
} 
else {
echo "No has introducido los tres valores";
}
 }




