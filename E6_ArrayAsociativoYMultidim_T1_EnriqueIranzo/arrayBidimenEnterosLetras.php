<?php
$numeros [0][0] = 0;
$numeros [0][1] = 1;
$numeros [0][2] = 2;
$numeros [1][0] = 3;
$numeros [1][1] = 4;
$numeros [1][2] = 5;
$numeros [2][0] = 6;
$numeros [2][1] = 7;
$numeros [2][2] = 8;

echo "Visualizamos con FOR anidado las filas y columnas de la MATRIZ";

$numfilas=3;
$numcolumnas=3;
for ($i = 0;$i <$numfilas; $i++)
{
    for ($j = 0; $j <$numcolumnas; $j++)
    {
        echo "<br>";
    echo $numeros [$i][$j];

}
}
$letras[0][0] = "a";
$letras[0][1] = "b";
$letras[0][2] = "c";
$letras[1][0] = "d";
$letras[1][1] = "e";
$letras[1][2] = "f";
echo "<br>";
echo "Visualizamos con WHILE<br>";
$a=0;
$j=0;
while ($a < 2)
{
    while ($j < 3)
    {
    echo $letras[$a][$j] . "<br>";
    $j++;
    }
$a=$a+1;
$j=0;
}


