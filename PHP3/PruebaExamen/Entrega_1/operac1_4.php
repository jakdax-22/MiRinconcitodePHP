<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$suma=$num1 + $num2;
$resta=$num1 - $num2;
$multi=$num1 * $num2;
$division=$num1 / $num2;
$resto = $num1 % $num2;
$and=$num1 && $num2;
$or=$num1 || $num2;

echo "La suma de $num1 y $num2 vale: $suma <br>";
echo "La resta de $num1 y $num2 vale: $resta <br>";
echo "La multi de $num1 y $num2 vale: $multi <br>";
echo "La division de $num1 y $num2 vale: $division <br>";
echo "El resto de $num1 y $num2 vale: $resto <br>";
echo "El and de $num1 y $num2 vale: $and <br>";
echo "El or de $num1 y $num2 vale: $or <br>";