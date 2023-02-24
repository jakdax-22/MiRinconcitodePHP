<?php


$searchterm=$_POST["searchterm"];
$searchterm=trim($searchterm);

if (empty($searchterm))
{
    echo "no has introducido patrón de búsqueda<br>";
    echo "Retrocede e inténtalo de nuevo";
    exit;
}
$searctype=$_POST["searchtype"];
$searchtype= addslashes($searchtype);
$searchterm= addslashes($searchterm);

$hostname="localhost";
$username="root";
$password="";
$database="bookorama";

$link= mysqli_connect($hostname,$username,$password,$database);
if (!$link){
echo "Error, no se pdo conectar a Mysql" . PHP_EOL;
echo "<br> Errno de depuración:" . mysqli_connect_errno();
}
else {
   echo "Conexión exitosa a la BD: <b>$database</b><br><br><br>";
   $query="SELECT * FROM books WHERE " . $searchtype . "LIKE '%" . $searchterm. "%'";
   $result= mysqli_query($link, $query);
   $num_filas= mysqli_affected_rows($link);
   printf("Nº de filas recuperadas:" , $num_filas);
   echo "<br>";
   $rows= mysqli_fetch_all($result, MYSQLI_ASSOC);
   foreach ($rows as $fila_actual)
   {
   print_r ($fila_actual);
   echo "<br>";
   }
   mysqli_close($link);
}
