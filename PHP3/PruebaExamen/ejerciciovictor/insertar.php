<html>
    <head>
        <style>
            table {
                border:1px solid black;
                border-collapse: collapse;
                margin-bottom: 50px;
                padding-left: 20px
                    
                   
            }
            .center {
                text-align: center
            }
        </style>
    </head>
    <body>
        <h2>FORMULARIO DE INSERCIÓN</h2>
        <table>
        <table>
            <form name="insertar" method="post" action="insertar.php">
                <tr><td>Nombre:</td><td><input name="nombre"></td></tr>
                <tr><td>Apellido:</td><td><input name="apellido"></td></tr>
                <tr><td colspan="2" class="center"><input type="submit" name="insert" value="Insertar"></td></tr>   
            </form>    
        </table>
            <form name="inNota" method="post" action="insertar.php">
            <table>
                <tr>
                    <td>Alumno:<select name="alumno">
                            
                        <?php
                        //Conexión con base de datos
                            $server="localhost";
                            $user="alumno";
                            $pass="alumno";
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


<?php

//Recogida de variables del formulario alumno
if (!isset($_POST['insert']))//Controlamos que el formulario se haya enviado
{

}
else
{
    if (empty($_POST['nombre']) || empty($_POST['apellido'])) //Para controlar que ambos campos tengan algo
    {
        echo "Debes rellenar ambos campos para insertar<p/>";   
    }
    elseif (!empty($_POST['nombre']) && !empty($_POST['apellido'])) 
    {
        //Si ambos campos se han enviado asigno variables para trabajar con ellas
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        
        //Conexión con Base de datos
        $server="localhost";
        $user="alumno";
        $pass="alumno";
        $db="notasASIR";

        $link= mysqli_connect($server, $user, $pass, $db);


        if ($link){
            $sentencia="INSERT INTO alumno (nombre, apellido) VALUES ('$nombre','$apellido')";
            //echo $sentencia;
            
            if (mysqli_query($link, $sentencia))//Controlamos que la query se ejecute correctamente
            {
              echo "Valor introducido con éxito<p/>";
            }
            else
            {
                echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link); //Línea para saber de que error se trata
            }
        }
        else{
                echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link); //Línea para saber de que error se trata

        }
    }
}

//Formulario de inserción de notas

if (isset($_POST['insertNote']))//Controlamos que el formulario se haya enviado
{
    if (!empty($_POST['alumno']) && !empty($_POST['asignatura']) && !empty($_POST['nota'])) //Para controlar que tengan algo

        //Si ambos campos se han enviado asigno variables para trabajar con ellas
        $alumno=$_POST['alumno'];
        $asignatura=$_POST['asignatura'];
        $nota=$_POST['nota'];
        
        //Conexión con Base de datos
        $server="localhost";
        $user="alumno";
        $pass="alumno";
        $db="notasASIR";

        $link= mysqli_connect($server, $user, $pass, $db);


        if ($link){
            
            $sentencia="INSERT INTO alumnoNotaAsignatura (nota, codAlumno, codAsignatura) VALUES ('$nota',$alumno,$asignatura)";
            //echo $sentencia;
            
            if (mysqli_query($link, $sentencia))//Controlamos que la query se ejecute correctamente
            {
              echo "Valor introducido con éxito<p/>";
            }
            else
            {
                echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link); //Línea para saber de que error se trata
            }
        }
        else{
                echo "Error: (" .mysqli_errno($link) .") " .mysqli_error($link); //Línea para saber de que error se trata

        }
    
}




echo "<a href='index.html'>Volver a inicio</a>";

