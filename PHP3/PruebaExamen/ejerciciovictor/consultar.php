<?php
//Creo la plantilla para el array
$tabla1 = array (
    array("NOMBRE", "APELLIDO", "SAD", "FOL", "ISO", "IAW", "ASO", "PAR")
    
    
);

//Empezamos rellenando el apartado de los alumnos

//Conexión a la base de datos

    $server="localhost";
    $user="alumno";
    $pass="alumno";
    $db="notasASIR";
    
    $link= mysqli_connect($server, $user, $pass, $db);
    
//Sentencia para extraer información alumno
    $sentencia="SELECT nombre, apellido FROM alumno";
    if ($alumno=mysqli_query($link, $sentencia)){
        //Creo un array intermedio donde ir cargando los datos[
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($alumno)){//Mientras que haya una línea en el array
                    $intermedioNom[$j]=$row['nombre'];
                    $intermedioApe[$j]=$row['apellido'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=0; $i<1;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioNom[$j];
                $tabla2[$a][$i]=$intermedioNom[$j];//Preparamos para segunda tabla
                
                $j++;
            }
        }
        
        //Columna Apellido
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=1; $i<2;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioApe[$j];
                $tabla2[$a][$i]=$intermedioApe[$j];//Preparamos para segunda tabla
                
                
                $j++;
            }
        }          
    }
    
//Sentencia para extraer las notas de SAD
     
    $SAD="SELECT nota FROM alumnoNotaAsignatura " 
          ."WHERE codAsignatura IN (SELECT codAsignatura FROM asignatura WHERE nombre = 'SAD')";
    
    if ($sad=mysqli_query($link, $SAD)){
        //Creo un array intermedio donde ir cargando los datos
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($sad)){//Mientras que haya una línea en el array
                    $intermedioSAD[$j]=$row['nota'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=2; $i<3;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioSAD[$j];
                
                $j++;
            }
        }
    }
    
//Sentencia para notas de FOL
    
        $FOL="SELECT nota FROM alumnoNotaAsignatura " 
          ."WHERE codAsignatura IN (SELECT codAsignatura FROM asignatura WHERE nombre = 'FOL')";
    
    if ($fol=mysqli_query($link, $FOL)){
        //Creo un array intermedio donde ir cargando los datos
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($fol)){//Mientras que haya una línea en el array
                    $intermedioFOL[$j]=$row['nota'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=3; $i<4;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioFOL[$j];
                
                $j++;
            }
        }
    }
    
//Sentencia para notas de ISO
    
        $ISO="SELECT nota FROM alumnoNotaAsignatura " 
          ."WHERE codAsignatura IN (SELECT codAsignatura FROM asignatura WHERE nombre = 'ISO')";
    
    if ($iso=mysqli_query($link, $ISO)){
        //Creo un array intermedio donde ir cargando los datos
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($iso)){//Mientras que haya una línea en el array
                    $intermedioISO[$j]=$row['nota'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=4; $i<5;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioISO[$j];
                
                $j++;
            }
        }
    }
    
//Sentencia para notas de IAW
    
        $IAW="SELECT nota FROM alumnoNotaAsignatura " 
          ."WHERE codAsignatura IN (SELECT codAsignatura FROM asignatura WHERE nombre = 'IAW')";
    
    if ($iaw=mysqli_query($link, $IAW)){
        //Creo un array intermedio donde ir cargando los datos
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($iaw)){//Mientras que haya una línea en el array
                    $intermedioIAW[$j]=$row['nota'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=5; $i<6;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioIAW[$j];
                
                $j++;
            }
        }
    }
    
//Sentencia para notas de ASO
    
        $ASO="SELECT nota FROM alumnoNotaAsignatura " 
          ."WHERE codAsignatura IN (SELECT codAsignatura FROM asignatura WHERE nombre = 'ASO')";
    
    if ($aso=mysqli_query($link, $ASO)){
        //Creo un array intermedio donde ir cargando los datos
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($aso)){//Mientras que haya una línea en el array
                    $intermedioASO[$j]=$row['nota'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad; $a++){//$a es la linea del array
            for ($i=6; $i<7;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioASO[$j];
                
                $j++;
            }
        }
    }
    
//Sentencia para notas de PAR
    
        $PAR="SELECT nota FROM alumnoNotaAsignatura "
                ."WHERE codAsignatura IN (SELECT codAsignatura FROM asignatura WHERE nombre = 'PAR')";
    
    if ($par=mysqli_query($link, $PAR)){
        //Creo un array intermedio donde ir cargando los datos
        //Y una variable llamada $j sobre la que ir sumando 1
        $j=0;
        while ($row=mysqli_fetch_assoc($par)){//Mientras que haya una línea en el array
                    $intermedioPAR[$j]=$row['nota'];
                    $j++;
                }
        $cantidad=mysqli_affected_rows($link); //Calculamos la cantidad de entradas que tiene la base de datos
        
        
        //Columna Nombre
        //reinicio la variable $j
        $j=0;
        for ($a=1; $a<=$cantidad+1; $a++){//$a es la linea del array
            for ($i=7; $i<8;$i++){ //$i es el índice del array
                $tabla1[$a][$i]=$intermedioPAR[$j];
                
                $j++;
            }
        }
    }


    ?>

<html>
    <head>
        <style>
            table, th, td, tr {
                border: 1px solid black;
                border-collapse: collapse;
                width: 700px;
                margin-bottom: 100px
                   
            }
        </style>
    </head>
    <body>
    <table>
        <thead>
            <tr>
                <?php
                
                
                $columnas= count($tabla1);
                //echo $columnas;
                
                for ($a=0;$a<1;$a++){
                    for ($i=0;$i<$columnas;$i++){
                        echo "<th>" .$tabla1[$a][$i] ."</th>";
                    }
                }
                ?>
            </tr>    
        </thead>  
        <tbody>
            
                <?php
                for ($a=1;$a<=$cantidad;$a++){//$cantidad está definida arriba
                    echo "<tr>";
                    for ($i=0;$i<$columnas;$i++){   
                        echo "<td>" .$tabla1[$a][$i] ."</td>";         
                    }
                    echo "</tr>";
                }
          
                ?>
            
           
            
        </tbody>
         
    </table>
    
 
    

    


<?php
//Para la segunda tabla creamos un nuevo array

$tabla2=array (
  array ("MEDIA PRIMERO", "MEDIA SEGUNDO")  
);

//MEDIA PRIMERO Jorge
$sentencia="SELECT ROUND(SUM(nota)/3,2) FROM alumnoNotaAsignatura "
."WHERE codAlumno =3 and codAsignatura IN "
."(SELECT codAsignatura FROM asignatura WHERE año='PRIMERO')";



?>

<table>
        <thead>
            <tr>
                <?php
             
                
                
                //echo $columnas;
                
                for ($a=0;$a<1;$a++){
                    for ($i=0;$i<4;$i++){
                        echo "<th>" .$tabla2[$a][$i] ."</th>";
                    }
                }
                
                ?>
            </tr>    
        </thead>  
        <tbody>
            
                <?php
              
                for ($a=1;$a<$cantidad;$a++){//$cantidad está definida arriba
                    echo "<tr>";
                    for ($i=0;$i<2;$i++){   
                        echo "<td>" .$tabla1[$a][$i] ."</td>";        //Aprovechamos el array que ya tenemos  
                    }
                    echo "</tr>";
                }
                
                ?>
            
           
            
        </tbody>
         
    </table>


<?php

echo "<a href='index.html'>Volver a inicio</a>";

?>
    </body>
</html>  