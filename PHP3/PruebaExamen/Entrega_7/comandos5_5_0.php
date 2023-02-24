<?php
$ruta="C:\\PROJECTS_PHP_IAW";
chdir($ruta);

echo "version mediante exec<br><br>";
echo "<pre>";
exec('dir',$result);

foreach ($result as $linea){
    echo $linea . "<br>";
}
echo "</pre>";