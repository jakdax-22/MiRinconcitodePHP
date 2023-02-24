<?php
$jugadores [0][0] = "Rooney";
$jugadores [0][1] = "Gigs";
$jugadores [1][0] = "Suarez";
$jugadores [1][1] = "Messi";
$jugadores [2][0] = "Torres";
$jugadores [2][1] = "Etoo";

echo "Declarar valor bidimensional y recorrerlo<br>";
echo "<br>";
$numfilas = 3;
$numcolumnas = 2;

for ($i=0;$i<$numfilas;$i++)
{
for ($j=0;$j<$numcolumnas;$j++)
{
echo "Fila $i-Col $j";
echo "<ul><li>" . $jugadores[$i][$j] . "</li></ul>";
}
}