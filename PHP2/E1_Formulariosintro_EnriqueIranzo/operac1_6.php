<?php
$suma=$_GET['num1'] + $_GET['num2'];
$resta=$_GET['num1'] - $_GET['num2'];
$division=$_GET['num1'] / $_GET['num2'];
$multiplicacion=$_GET['num1'] * $_GET['num2'];

if (empty ($_GET['num1']) && empty($_GET['num2'])){
echo "Ambos campos están vacíos";   
}
elseif (empty ($_GET['num1'])){
echo "El primer campo está vacío";   
}
elseif (empty ($_GET['num2'])){
echo "El segundo campo está vacío";   
}

else {
echo "<h2>Introducción de dos números</h2>";
echo "<h3>Operaciones básicas</h3>";
echo "<h2>Las operaciones aritméticas son:</h2>";
echo "La suma vale: $suma<br>";
echo "La resta vale: $resta<br>";
echo "La división vale: $division<br>";
echo "La multiplicación vale: $multiplicacion<br>";
}