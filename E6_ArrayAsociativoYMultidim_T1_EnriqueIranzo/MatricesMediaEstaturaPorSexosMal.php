<?php
$matriz [0][0]=172;
$matriz [0][1]=165;
$matriz [0][2]=179;
$matriz [0][3]=163;
$matriz [0][4]=170;
$matriz [0][5]=174;
$matriz [1][0]="H";
$matriz [1][1]="M";
$matriz [1][2]="H";
$matriz [1][3]="M";
$matriz [1][4]="M";
$matriz [1][5]="H";
$numfilas=2;
$numcolumnas=6;
$numhombres=0;
$nummujeres=0;
$alturahombres=0;
$alturamujeres=0;
echo "Visualizamos el contenido de la MATRIZ<br>";
echo "MATRIZ<br>";
echo "======<br>";
echo "Altura ";
for ($i=0;$i<$numcolumnas;$i++)
{
echo $matriz [0][$i] . " ";
}
echo "<br><br>";
echo "Sexo ";
for ($j=0;$j<$numcolumnas;$j++)
{
    echo $matriz [1][$j] . " ";
}
echo "<br><br>";
for ($k=0;$k<$numfilas;$k++)
{
for ($l=0;$l<$numcolumnas;$l++)
{
if ($matriz [1][$l]="H")
{
$numhombres=$numhombres+1;
$alturahombres= $alturahombres + $matriz[0][$l]; 
}
if ($matriz [1][$l]="M")
{
$nummujeres=$nummujeres +=1;
$alturamujeres = $alturamujeres + $matriz [0][$l];
}
}
}
$mediahombres = $alturahombres/$numhombres;
$mediamujeres = $alturamujeres/$nummujeres;
echo "Numero de Hombres de la muestra:<br>";
echo $numhombres . "<br>";
echo "Numero de Mujeres de la muestra:<br>";
echo $nummujeres . "<br>";
echo "La media de altura de los Hombres es:<br>";
echo $mediahombres . "<br>";
echo "La media de altura de las Mujeres es:<br>";
echo $mediamujeres . "<br>"; 


