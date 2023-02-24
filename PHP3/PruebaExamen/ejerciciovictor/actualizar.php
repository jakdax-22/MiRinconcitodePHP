<html>
    <head>
        <style>
            table, td, th {
                border:1px solid black;
                border-collapse: collapse;
                width:700px;
                height:40px                   
            }
            .input {
                text-align: center
            }
        </style>  
    </head>
    <body>
        <h2>FORMULARIO DE ACTUALIZACIÓN</h2>
        <form name="actualizar" method="post" action="actualizar.php">
            <table>
                <tr>
                    <th>ACTUALIZAR ALUMNOS</th>
                    <th>ACTUALIZAR ASIGNATURA</th>
                </tr>

                <tr>
                    <td>
                        Valor a cambiar
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
                        Valor a cambiar
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
                    <td>
                        Nuevo nombre: <input type="text" name="nomAlu"> <!--ALUMNO-->
                    </td>
                    <td>
                        Nuevo nombre: <input type="text" name="nomAsig"><!--ASIGNATURA-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Nuevo Apellido: <input type="text" name="apeAlu"><!--ALUMNO-->
                    </td>

                    <td><!--ASIGNATURA-->
                        Curso: <select name="curso">
                            <option value="PRIMERO">PRIMERO</option>
                            <option value="SEGUNDO">SEGUNDO</option>

                        </select>
                    </td>
                </tr>




                    <tr><td colspan="2" class="input"><input type="submit" name="consult" value="Enviar"></td></tr>   
               
            </table>
        </form> 
   
    </body>
</html>

<?php

//Aquí ahora vamos a crear el flujo de ejecución del formulario de arriba.
//Vamos a filtrar para que solo se pueda actualizar una columna a la vez

//Recogida de variables

    //Alumnos
    $codAlu=$_POST['alumno'];  
    $nomNew=$_POST['nomAlu'];
    $apeNew=$_POST['apeAlu'];
    
    
    //Asignaturas
    $codAsig=$_POST['asignatura'];
    $asigNew=$_POST['nomAsig'];
    $curs=$_POST['curso'];
    
//Volvemos a crear la conexión con la base de datos
    $server="localhost";
    $user="alumno";
    $pass="alumno";
    $db="notasASIR";
    $link= mysqli_connect($server, $user, $pass, $db);
    
    
if (isset($_POST['consult'])){

    
    if (!empty($codAlu) && !empty($nomNew) && !empty($apeNew)){
        //Si no están vacios los referentes a alumno quiere decir que
        //es la parte que hemos rellenado
        
        $sentencia="UPDATE alumno "
                    . "SET nombre='$nomNew', apellido ='$apeNew' "
                    . "WHERE codAlumno=$codAlu";  
        
        //echo $sentencia;
        
        if (mysqli_query($link, $sentencia)){//Si la sentencia funciona
            echo "El alumno con el id $codAlu fue actualizado<p/>";
        }
    }
    
    elseif (!empty ($codAsig) && !empty($asigNew) && !empty($curs)){
        $sentencia="UPDATE asignatura "
                    . "SET año='$curs', nombre ='$asigNew' "
                    . "WHERE codAsignatura=$codAsig";
        
        //echo $sentencia;
        
        if (mysqli_query($link, $sentencia)){//Si la sentencia funciona
            echo "La asignatura con el id $codAsig fue actualizada<p/>";
        }

    }


}


echo "<a href='index.html'>Volver a inicio</a>";











