<?php
echo "Invocando a la función<br><br>";
function url ($a,$b,$c,$d,$e,&$completo)
{
$completo= "$a://$b.$c.$d.$e";
}
$a="http";
$b="www";
$c="lagaceta";
$d="com";
$e="ar";
$url=url ($a,$b,$c,$d,$e,$completo);

echo "La URL completa es....<br><br>";
echo "$completo";