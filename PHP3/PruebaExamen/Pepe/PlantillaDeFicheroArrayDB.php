<?php

////Esquema fecha
    // $fecha=getdate();
    // $hoy=$fecha['mday'] ."/ 0" .$fecha['mon'] ."/ " .$fecha['year'];
    // echo $hoy;



////Esquema meter en array multidimensional .txt
    $file = "baltazar.txt";
    $fp = fopen($file, "r");
    $a=0;
    $i=0;
    $word="";
        
    while (!feof($fp)) {
                
    $char = fgetc($fp);
    $word=$word .$char;
        if ($char == "\t"){
            $prueba[$a][$i]=$word;
            $i++;
            $word="";
        }
        elseif ($char == "\n"){
            $prueba[$a][$i]=$word;
            $a++;
            $i=0;
            $word="";
        }
        elseif ($char=feof($fp)) {
            $prueba[$a][$i]=$word;
            $a++;
            $i=0;
            $word="";
        }
    }
    
////Esquema conexión base de datos
    $server="localhost";
    $user="root";
    $pass="root";
    $db="prueba";
            
    $link=mysqli_connect($server, $user, $pass, $db);
        
////Consulta para saber las columnas
    // $sql="DESC alumno"; //cambiar a la tabla que se quiera
    // mysqli_query($link, $sql);
    // $columnas= mysqli_affected_rows($link);
        
////Ejecución manual para VISENS        
   





    $rows=count($prueba);
    
    if ($link){
        for ($a=0; $a<$rows;$a++){      
        $sentencia="INSERT INTO alumno VALUES (" .$prueba[$a][0] .", '" .$prueba[$a][1] ."', '" .$prueba[$a][2] ."')";
        mysqli_query($link, $sentencia);            
        }
            
    }
    else {
        echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
    }
    











    ////Modo loco
   
   //  $rows=count($prueba);
           
    // if ($link){
        
        // for ($a=0; $a<$rows;$a++){
               
        // $sentencia="INSERT INTO alumno VALUES (";
            
            // for ($i=0; $i<$columnas;$i++){
                               
                        // if ($i!=$columnas-1){
                            // $sentencia.="'" .$prueba[$a][$i] ."',";
                        // }
                        // else{
                            // $sentencia.="'" .$prueba[$a][$i] ."')";
                        // }  
                    // }
                    // mysqli_query($link, $sentencia);
                // }         
            // }
            // else {
                // echo "Error (" .mysqli_errno($link) .") " .mysqli_error($link);
            // }

////Plantilla Fwrite




