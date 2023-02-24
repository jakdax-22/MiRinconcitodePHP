<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];


if (empty($num1) && empty($num2)){
    echo "<h3>Ambos campos estan vacios</h3>";
}
elseif (empty($num1)){
    echo "<h3>El primer campo esta vacio</h3>";
} 
elseif (empty($num2)){
    echo "<h3>El segundo campo esta vacio</h3>";
}
else {
    $suma=$num1 + $num2;
    $resta=$num1 - $num2;
    echo "La suma vale: $suma";
    echo "<br>";
    echo "La resta vale: $resta";
    }
