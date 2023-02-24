<?php

$hostname="localhost";
$username="root";
$password="";
$database="bookorama";
$ISBN=$_POST ["isbn"];
$author=$_POST["author"];
$title=$_POST["title"];
$price=$_POST["price"];

$link=mysqli_connect($hostname,$username,$password,$database);

if (empty($ISBN) || empty($author) || empty($title) || empty($price))
{
echo "Uno de los campos está vacío, por favor rellénelo";
}

else {
if (!$link) {
echo "Error: No se pudo conectar a MySQL" . PHP_EOL;
echo "errno de depuración: " . mysqli_connect_errno() . "<br>";
}
else {
echo "Conexión exitosa<br>";
echo "<b>BD: ". $database . "</b><br><br>";

$insert_query="INSERT INTO books (isbn,author,title,price)"
        .  "VALUES('$ISBN','$author','$title',$price)";
mysqli_query($link, $insert_query);
printf("Affected rows (INSERT) : %d\n" , mysqli_affected_rows($link));
}
}

