<?php
$hoy= getdate();
$horas="$hoy[hours]";
if ($horas>=0 && $horas <=11)
{
echo"<b>=========================<br>";
echo "Ahora son las: ";
echo "$horas ";
echo "horas y ";
echo "$hoy[minutes] ";
echo "minutos <br>";
echo "==========================<br>";
echo "Tenga usted Buenos dias</b>";
}
 elseif ($horas>=12 && $horas<=20) {
echo"<b>=========================<br>";
echo "Ahora son las: ";
echo "$horas ";
echo "horas y ";
echo "$hoy[minutes] ";
echo "minutos <br>";
echo "==========================<br>";
echo "Tenga usted Buenas Tardes, Sr-Sra</b>";
 }
 elseif ($horas>=21 && $horas<=23) {
echo"<b>=========================<br>";
echo "Ahora son las: ";
echo "$horas ";
echo "horas y ";
echo "$hoy[minutes] ";
echo "minutos <br>";
echo "==========================<br>";
echo "A Dormir Bien,Caballero/Señora</b>";
 }
