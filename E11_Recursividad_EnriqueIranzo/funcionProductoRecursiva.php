<?php
function productoRecV1 ($a,$b)
{
    if ($b>0){
$prod=$a+productoRecV1($a,$b-1);
    }
    else
    {
        $prod=0;
    }
    return $prod;
}

function productoRecV2($a,$b)
{
if ($a>0)
{
$prod=$b+ productoRecV2($a-1,$b);
}
else
{
$prod=0;
}
return $prod;
}
      


