<?php

    $server="localhost";
    $user="root";
    $pass="root";
    $db="gest_asignaturasdb";
    $link=mysqli_connect($server,$user,$pass,$db);


    echo "Estamos en listar Familias Profesionales";
    echo "<br>";
    $sql="SELECT * FROM famprofesional";
    $result=mysqli_query($link,$sql);
    $cadHead="Codigo Familia"." | "
            ."Nombre Familia";
    echo "<br>";

        $salida="";

        echo $cadHead;
            while ($row=mysqli_fetch_assoc($result)){
        $salida = $row["codFamilia"]." | "
                .$row["nomFamilia"]." | ";
                    echo "<br>";
                    echo $salida;
            }
mysqli_free_result($result);
echo "<br>";
echo "<br>";


echo "Estamos en listar Modulo";
echo "<br>";
$sql="SELECT * FROM modulo";
$result=mysqli_query($link,$sql);
$cadHead="Codigo Modulo"." | "
        ."Nombre Modulo". " | "
        ."Codigo Curso". " | "
        ."Curso";
echo "<br>";

    $salida="";

    echo $cadHead;
        while ($row=mysqli_fetch_assoc($result)){
    $salida = $row["codModulo"]." | "
            .$row["nomModulo"]." | "
            .$row["codCiclo"]." | "
            .$row["curso"];
                echo "<br>";
                echo $salida;
        }
mysqli_free_result($result);
echo "<br>";
echo "<br>";

echo "Estamos en listar Grado";
echo "<br>";
$sql="SELECT * FROM grado";
$result=mysqli_query($link,$sql);
$cadHead="Codigo Grado"." | "
        ."Nombre Grado";
echo "<br>";

    $salida="";

    echo $cadHead;
        while ($row=mysqli_fetch_assoc($result)){
    $salida = $row["codGrado"]." | "
            .$row["nomGrado"]." | ";
                echo "<br>";
                echo $salida;
        }
mysqli_free_result($result);
echo "<br>";
echo "Cerramos la BD";