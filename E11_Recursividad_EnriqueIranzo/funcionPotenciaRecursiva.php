<?php
function PotenciaRec ($a,$b)
{
if ($b>0)
{
$pot=$a* PotenciaRec($a, $b-1);
}
else
{
$pot=1;
}
return $pot;
}

