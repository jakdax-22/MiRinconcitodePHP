<?php


////Esquema conexión base de datos
    $server="localhost";
    $user="root";
    $pass="root";
    $db="clientesdb_iaw";
            
    $link=mysqli_connect($server, $user, $pass, $db);
    
////Consulta para saber las columnas
    $sql="DESC articulo"; //cambiar a la tabla que se quiera
    mysqli_query($link, $sql);
    $columnas= mysqli_affected_rows($link);
   
    
////Consulta para sacar los registros 
    $sentencia= "SELECT * FROM articulo";
    $str="";
    $query= mysqli_query($link, $sentencia);
    $a=0;
    $nomArchivo="prueba.txt";
    while($rows= mysqli_fetch_array($query)){
    
        for ($i=0;$i<$columnas;$i++){
             $str.=$rows[$i]. "\t";
             
        }
        $fd1=fopen($nomArchivo, "a+");
        $res=fwrite($fd1, "$str" ."\n");
        fclose($fd1);
        $str="";
        
    }