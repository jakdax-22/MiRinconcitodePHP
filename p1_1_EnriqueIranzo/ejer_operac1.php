
<html>
    <head>
    <h2>Operaciones aritméticas:</h2>
    </head>
    <body>
    <?php
    $primero = 8;
    $segundo = 3;
    $suma = $primero + $segundo;
    $resta = $primero - $segundo;
    $multi = $primero * $segundo;
    $divi = $primero / $segundo;
    $resto =$primero % $segundo;
    
    echo "<b>Vamos a realizar las operaciones con los dos números:<br>";
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
    echo "La división vale: " . $divi;
    echo "<br>";
    echo "El resto de la división vale: " . $resto;
    echo "</b>";
    
    
           
?>
</body>
</html>
