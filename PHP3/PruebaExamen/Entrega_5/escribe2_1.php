<?php
$nomarchivo="ej_fwrite.txt";
$fopen= fopen($nomarchivo, "w");
$fwrite=fwrite ($fopen , "Viva el Betis");
fclose($fopen);

