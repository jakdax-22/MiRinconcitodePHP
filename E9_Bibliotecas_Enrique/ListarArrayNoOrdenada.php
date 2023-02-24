<?php
function listarVectorNoOrdenada ($array){
echo "En forma de lista no ordenada <br>";
$contar= count ($array);
$contarb=$contar-1;
for ($i=0;$i<=$contarb;$i++){
echo "<ul><li>$array[$i]</li></ul>";
}

}

