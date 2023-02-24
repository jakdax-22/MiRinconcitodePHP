<?php

session_start();

$_SESSION['hola'] = "Hola Mundo";
echo 'El contenido de $_SESSION[hola] es ' . $_SESSION['hola'];
echo "<br><br>";
echo "Veamos cómo se mantiene su valor al enlazar con la siguiente página...<br><br>";
echo "Pulsa SIGUIENTE PÁGINA, se ejecutará page 2...<br><br><br>";
?>
<a href="page2.php">Siguiente Página</a>;


