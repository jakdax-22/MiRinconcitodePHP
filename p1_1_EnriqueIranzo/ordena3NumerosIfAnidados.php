<?php
$n1=1;
$n2=2;
$n3=0;
if ($n1<$n2 && $n2<$n3)
{
    echo "<b>orden: n1<n2<n3";
    echo "</b><br>" . $n1 . "<" . $n2 . "<" . $n3;
}
elseif ($n2<$n1 && $n1<$n3)
{
    echo "<b>orden: n2<n1<n3";
    echo "</b><br>" . $n2 . "<" . $n1 . "<" . $n3;
}
elseif ($n3<$n1 && $n1<$n2)
{
    echo "<b>orden: n3<n1<n2";
    echo "</b><br>" . $n3 . "<" . $n1 . "<" . $n2;
}
elseif ($n1<$n3 && $n3<$n2)
{
   echo "<b>orden: n1<n3<n2";
    echo "</b><br>" . $n1 . "<" . $n2 . "<" . $n3;
}
elseif ($n2<$n3 && $n3<$n1)
{
   echo "<b>orden: n2<n3<n1";
    echo "</b><br>" . $n2 . "<" . $n3 . "<" . $n1;
}
elseif ($n3<$n2 && $n2<$n1)
{
   echo "<b>orden: n3<n2<n1";
    echo "</b><br>" . $n3 . "<" . $n2 . "<" . $n1;
}
?>