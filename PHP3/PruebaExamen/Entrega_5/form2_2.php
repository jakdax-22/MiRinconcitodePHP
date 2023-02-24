

<?php
$nomarchivo="ej_fwrite.txt";
$fopen= fopen($nomarchivo, "a+");
$fwrite=fwrite ($fopen , "Viva el Betis");
fclose($fopen);

