<html>
    <head>
        <style>
            table, td, th {
                border:1px solid black;
                border-collapse: collapse;
                width:720px;
                height:40px                   
            }
            .input {
                text-align: center
            }
        </style>  
    </head>
    <body>
        <h2>FORMULARIO DE BORRADO</h2>
        <form name="actualizar" method="post" action="eliminar.php">
            <table>
                <tr>
                    <th>BORRAR ALUMNOS</th>
                    <th>BORRAR ASIGNATURAS</th>
                </tr>

                <tr>
                    <td>
                        Valor a borrar
                        <select name="alumno"> <!--Creo un desplegable con las opciones de alumno -->
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
                    <td>
                        Valor a borrar
                        <select name="asignatura"> <!--Creo un desplegable con las opciones de asignatura -->
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
                    <td>Marca la casilla para confirmar<input type="checkbox" name="borrAlu"></td> <!--Checkbox borrado Alumno -->
                    <td>Marca la casilla para confirmar<input type="checkbox" name="borrAsig"></td> <!--Checkbox borrado Asignatura -->
                </tr>
                 
                    
                
                    <tr><td colspan="2" class="input"><input type="submit" name="delete" value="Enviar"></td></tr>   
               
            </table>
        </form>   
    </body>
</html>
<?php

//Aquí ahora vamos a crear el flujo de ejecución del formulario de arriba.
//Vamos a filtrar para que solo se pueda borrar una columna a la vez

//Recogida de variables

    //Alumnos
    $codAlu=$_POST['alumno'];
    $checkAlu=$_POST['borrAlu'];
    
    //Asignaturas
    $codAsig=$_POST['asignatura'];
    $checkAsig=$_POST['borrAsig'];
    
//Volvemos a crear la conexión con la base de datos
    $server="localhost";
    $user="alumno";
    $pass="alumno";
    $db="notasASIR";
    $link= mysqli_connect($server, $user, $pass, $db);
    
    
if (isset($_POST['delete'])){ //Si el formulario está enviado

    
    if (!empty($codAlu) && !empty($checkAlu)){
        //Si no están vacios los referentes a alumno quiere decir que
        //es la parte que hemos rellenado
        
        $sentencia="DELETE FROM alumno "
                    ."WHERE codAlumno=$codAlu";  
        
        //echo $sentencia;
        
        if (mysqli_query($link, $sentencia)){//Si la sentencia funciona
            echo "El alumno con el id $codAlu fue eliminado<p/>";
        }
    }
    
    elseif (!empty ($codAsig) && !empty($checkAsig)){
        $sentencia="DELETE FROM asignatura "
                   ."WHERE codAsignatura=$codAsig";     
        
        //echo $sentencia;
        
        if (mysqli_query($link, $sentencia)){//Si la sentencia funciona
            echo "La asignatura con el id $codAsig fue eliminada<p/>";
        }

    }


}
mysqli_close($link);
echo "<a href='index.html'>Volver a inicio</a>";

