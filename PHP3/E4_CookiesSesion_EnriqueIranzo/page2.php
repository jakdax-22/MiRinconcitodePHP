<?php
session_start();
echo "Intentemos acceder al contenido de la variable " . '$_SESSION...';
echo "<br><br> El contenido de" . '$_SESSION[hola] es:' . $_SESSION['hola'];
echo "<br><br> Ahora aplicamos" . 'unset ($_SESSION_[hola])';

unset($_SESSION['hola']);

echo "<br>Por lo que se pierde el valor de la variable...<br><br>";
echo "Pulsa SIGUIENTE PÁGINA se ejecutará page 3<br>";

?>
<a href="page3.php">Siguiente página</a>;

