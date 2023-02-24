<html>
    <head>
    <h2>Operaciones aritméticas:</h2>
    </head>
    <body>
    <?php
    $primero = 4;
    $segundo = 0;
    $suma = $primero + $segundo;
    $resta = $primero - $segundo;
    $multi = $primero * $segundo;
    $divi = @($primero / $segundo);
   
    
    echo "Vamos a realizar las operaciones con los dos números:<br>";
    echo "\$primero= " . $primero;
    echo "<br>";
    echo "\$segundo= " . $segundo;
    echo "<br><br>";
    echo "La suma vale: " . $suma;
    echo "<br>";
    echo "La resta vale: " . $resta;
    echo "<br>";
    echo "La multiplicación vale: " . $multi;
    echo "<br>";
    echo "Incluimos el operador de supresión de errores @.<br>";
    echo "La división vale: " . $divi;         
?>
</body>
</html>

