<?php

//Conexion
$server="localhost";
$user="root";
$pass="root";
$db="clientesdb_iaw";

$link=mysqli_connect($server, $user, $pass, $db);

/*if ($link){
    echo "Está bien";
}
else {
    echo "Error (" .mysqli_errno($link) .")" .mysqli_error($link);
}
*/

$multi = array (
    array("idArticulo", "Descripción", "Precio", "Stock")
);

$id="SELECT idArticulo FROM articulo";
$dsc="SELECT Descripcion FROM articulo";
$pr="SELECT Precio FROM articulo";
$stk="SELECT Stock FROM articulo";




//IDArticulo
if ($select=mysqli_query($link, $id)){
    $cantidad=mysqli_affected_rows($link);
    $columna=count($multi);
    $j=0;
    while ($row=mysqli_fetch_assoc($select)){
                $intermedioID[$j]=$row['idArticulo'];
                $j++;
    }
}
$j=0;
for ($a=1;$a<$cantidad;$a++){
    for ($i=0;$i<1;$i++){
        $multi[$a][$i]=$intermedioID[$j];
        $j++;
    }
}


//Descripción
if ($select=mysqli_query($link, $dsc)){
    $cantidad=mysqli_affected_rows($link);
    $columna=count($multi);
    $j=0;
    while ($row=mysqli_fetch_assoc($select)){
                $intermedioDSC[$j]=$row['Descripcion'];
                $j++;
    }
}
$j=0;
for ($a=1;$a<$cantidad;$a++){
    for ($i=1;$i<2;$i++){
        $multi[$a][$i]=$intermedioDSC[$j];
        $j++;
    }
}

//Precio
if ($select=mysqli_query($link, $pr)){
    $cantidad=mysqli_affected_rows($link);
    $columna=count($multi);
    $j=0;
    while ($row=mysqli_fetch_assoc($select)){
                $intermedioPR[$j]=$row['Precio'];
                $j++;
    }
}
$j=0;
for ($a=1;$a<$cantidad;$a++){
    for ($i=2;$i<3;$i++){
        $multi[$a][$i]=$intermedioPR[$j];
        $j++;
    }
}


//Stock
if ($select=mysqli_query($link, $stk)){
    $cantidad=mysqli_affected_rows($link);
    $columna=count($multi);
    $j=0;
    while ($row=mysqli_fetch_assoc($select)){
                $intermedioSTK[$j]=$row['Stock'];
                $j++;
    }
}
$j=0;
for ($a=1;$a<$cantidad;$a++){
    for ($i=3;$i<4;$i++){
        $multi[$a][$i]=$intermedioSTK[$j];
        $j++;
    }
}



?>
<html>
<head>
<style>
    table {
        border: 1px solid black;
    }
    </style>
</head>
<body>
    <table>
        <thead>
            <?php
                for ($a=0;$a<$columna;$a++){
                    echo "<tr>";
                    for ($i=0;$i<4;$i++){
                        echo "<th>" .$multi[$a][$i]."</th>";
                    }
                }
                echo "</tr>";

            ?>
            
        </thead>
    </table>
</body>
</html>
