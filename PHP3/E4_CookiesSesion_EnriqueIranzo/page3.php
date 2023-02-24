<?php
session_start();
echo "El contenido de " . '$_SESSION[hola] es: ' . $_SESSION['hola'];
echo "<br>Hemos visto que se ha perdido el valor de la variable<br><br>";
echo "A continuación vamos a destruir el identificador de la sesión mediante" . 'session_destroy()<br><br>';
session_destroy();

echo "<b>Sesión destruida!!</b>";

